<?php
require 'data/projects.php';
require 'data/faqs.php';

$slug = isset($_GET['id']) ? preg_replace('/[^a-z0-9\-]/', '', strtolower($_GET['id'])) : '';
$project = $projects[$slug] ?? null;

if (!$project) {
    http_response_code(404);
    $pageTitle = 'Project not found — Atenoobie';
    $activePage = 'portfolio';
    require 'includes/header.php';
    require 'includes/navbar.php';
    ?>
    <section class="section">
      <div class="container-narrow text-center">
        <h1>Project not found</h1>
        <p class="lede mx-auto">That project doesn't exist, or the link is out of date.</p>
        <a href="portfolio.php" class="btn btn-amber mt-3">Back to portfolio</a>
      </div>
    </section>
    <?php
    require 'includes/footer.php';
    exit;
}

$pageTitle = $project['title'].' — Atenoobie';
$pageDescription = $project['summary'];
$activePage = 'portfolio';
require 'includes/header.php';
require 'includes/icons.php';
require 'includes/partials.php';
require 'includes/navbar.php';
?>

<!-- Project header -->
<section class="hero">
  <div class="container-narrow">
    <nav class="small-caption mb-2"><a href="portfolio.php">Portfolio</a> / <?= htmlspecialchars($project['title']) ?></nav>
    <span class="eyebrow"><?= htmlspecialchars($project['client']) ?></span>
    <h1><?= htmlspecialchars($project['title']) ?></h1>
    <p class="lede mt-3"><?= htmlspecialchars($project['summary']) ?></p>
    <div class="tags mt-2">
      <?php foreach ($project['tags'] as $t): ?><span class="tag tag-pine"><?= htmlspecialchars($t) ?></span><?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Project body -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="row gy-5">
      <div class="col-lg-7">
        <h2 style="font-size:1.4rem;">The problem</h2>
        <p><?= htmlspecialchars($project['body']) ?></p>
        <h2 style="font-size:1.4rem;" class="mt-4">The challenge</h2>
        <p><?= htmlspecialchars($project['challenge']) ?></p>
        <h2 style="font-size:1.4rem;" class="mt-4">The approach</h2>
        <p><?= htmlspecialchars($project['solution']) ?></p>
      </div>
      <div class="col-lg-5">
        <div class="tool-card">
          <h4>Stack</h4>
          <div class="logo-strip mt-2">
            <?php foreach ($project['stack'] as $s): ?><span class="logo-pill"><?= htmlspecialchars($s) ?></span><?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Feature: key features -->
<section class="section">
  <div class="container-narrow">
    <div class="section-head"><span class="eyebrow">Automated</span><h2>What the system handles on its own.</h2></div>
    <div class="row">
      <div class="col-lg-10">
        <?php foreach ($project['features'] as $f): ?>
        <div class="feature-row">
          <div class="icon"><?= icon('check') ?></div>
          <div><p class="mb-0"><?= htmlspecialchars($f) ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Timeline -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="row gy-5">
      <div class="col-lg-4"><span class="eyebrow">Timeline</span><h2>From research to where it stands now.</h2></div>
      <div class="col-lg-8">
        <?php foreach ($project['timeline'] as $step): ?>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div><h4><?= htmlspecialchars($step['label']) ?></h4><p><?= htmlspecialchars($step['detail']) ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Stats -->
<?php if (!empty($project['stats'])): ?>
<section class="section">
  <div class="container-narrow">
    <div class="section-head"><span class="eyebrow">Results</span><h2>Measurable outcomes.</h2></div>
    <div class="row row-cols-1 row-cols-sm-3 g-4">
      <?php foreach ($project['stats'] as $stat): ?>
      <div class="col"><div class="stat-block"><span class="num"><?= htmlspecialchars($stat['value']) ?></span><span class="label"><?= htmlspecialchars($stat['label']) ?></span></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Testimonial -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="testimonial">
      <?= icon('quote') ?>
      <blockquote class="mt-3">This project made the day-to-day noticeably less stressful — the small daily task just isn't a task anymore.</blockquote>
      <p class="attribution">— Project stakeholder</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container-narrow">
    <?php renderCta('Want a similar system for your process?', 'Same approach — start with the manual version, end with something that runs itself.', 'Start a similar project', 'about.php#contact'); ?>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="row gy-4">
      <div class="col-lg-4"><span class="eyebrow">FAQ</span><h2>Stack &amp; maintenance.</h2></div>
      <div class="col-lg-8"><?php renderFaqAccordion($allFaqs['general'], 'faqProject'); ?></div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
