<?php
$pageTitle = 'Portfolio — Atenoobie';
$pageDescription = 'Completed and in-progress software projects: an inventory system, an on-device ML app, and other automation work.';
$activePage = 'portfolio';
require 'includes/header.php';
require 'includes/icons.php';
require 'includes/partials.php';
require 'data/projects.php';
require 'data/faqs.php';
require 'includes/navbar.php';

$featured = null;
foreach ($projects as $p) { if ($p['featured']) { $featured = $p; break; } }
?>

<!-- Header -->
<section class="hero">
  <div class="container-narrow">
    <span class="eyebrow">Portfolio</span>
    <h1>Projects built to solve one manual problem each.</h1>
    <p class="lede mt-3">From a thesis-grade ML app to a café's day-to-day inventory system — each project started with the same question: what is someone doing by hand here, and why?</p>
  </div>
</section>

<!-- Portfolio list -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="row g-4">
      <?php foreach ($projects as $p): ?>
        <div class="col-md-6">
          <div class="project-card">
            <div class="thumb text-pine"><?= icon($p['thumbnail']) ?></div>
            <h3><?= htmlspecialchars($p['title']) ?></h3>
            <p class="small-caption mb-0"><?= htmlspecialchars($p['client']) ?></p>
            <div class="tags">
              <?php foreach ($p['tags'] as $t): ?><span class="tag"><?= htmlspecialchars($t) ?></span><?php endforeach; ?>
            </div>
            <p class="desc"><?= htmlspecialchars($p['summary']) ?></p>
            <a href="project.php?id=<?= urlencode($p['slug']) ?>" class="btn btn-outline-ink btn-sm mt-2 align-self-start">View project</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Feature: standout project -->
<?php if ($featured): ?>
<section class="section">
  <div class="container-narrow">
    <div class="section-head"><span class="eyebrow">Most impact</span><h2>Rise &amp; Brew Inventory System</h2></div>
    <div class="featured-project">
      <div>
        <p><?= htmlspecialchars($featured['body']) ?></p>
        <p><?= htmlspecialchars($featured['solution']) ?></p>
        <a href="project.php?id=<?= urlencode($featured['slug']) ?>" class="btn btn-amber mt-2">Read the full case study</a>
      </div>
      <div>
        <svg viewBox="0 0 400 280" width="100%" role="img" aria-label="Inventory dashboard illustration">
          <rect x="0" y="0" width="400" height="280" rx="10" fill="#faf7f1" stroke="#ddd5c4"/>
          <rect x="24" y="24" width="150" height="18" rx="3" fill="#e9e2d2"/>
          <rect x="24" y="56" width="352" height="1" fill="#ddd5c4"/>
          <?php for ($i=0; $i<4; $i++): $y = 76 + $i*44; ?>
          <rect x="24" y="<?= $y ?>" width="352" height="32" rx="4" fill="<?= $i%2==0 ? '#f3efe6' : '#faf7f1' ?>"/>
          <rect x="36" y="<?= $y+11 ?>" width="90" height="10" rx="2" fill="#b9ae98"/>
          <rect x="300" y="<?= $y+11 ?>" width="50" height="10" rx="2" fill="<?= $i==1 ? '#c2793b' : '#2f6e5c' ?>"/>
          <?php endfor; ?>
        </svg>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Features list: capabilities -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="section-head"><span class="eyebrow">Capabilities shown across these projects</span><h2>What these builds demonstrate.</h2></div>
    <div class="row">
      <div class="col-lg-10">
        <div class="feature-row">
          <div class="icon"><?= icon('database') ?></div>
          <div><h4>Schema &amp; ERD design</h4><p>Designed relational schemas first, tested them in phpMyAdmin, then built the application on top.</p></div>
        </div>
        <div class="feature-row">
          <div class="icon"><?= icon('data') ?></div>
          <div><h4>Data pipelines &amp; dashboards</h4><p>From raw CSVs to synced, reportable data — including the metrics fixes behind the SOM detection thesis.</p></div>
        </div>
        <div class="feature-row">
          <div class="icon"><?= icon('automation') ?></div>
          <div><h4>Cross-platform builds</h4><p>Server-side systems in Python and PHP, and a mobile ML app in Flutter with on-device inference.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonial -->
<section class="section">
  <div class="container-narrow">
    <div class="testimonial">
      <?= icon('quote') ?>
      <blockquote class="mt-3">The thesis defense panel pushed hard on the "real-time" claim — the honest on-device framing held up because the engineering actually backed it.</blockquote>
      <p class="attribution">— Thesis panel feedback, paraphrased</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section section-alt">
  <div class="container-narrow">
    <?php renderCta('Want something like this built for your process?', 'Let\'s talk about what a first version could look like.', 'Start a project', 'about.php#contact'); ?>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="container-narrow">
    <div class="row gy-4">
      <div class="col-lg-4"><span class="eyebrow">FAQ</span><h2>About these projects.</h2></div>
      <div class="col-lg-8"><?php renderFaqAccordion($allFaqs['timeline'], 'faqPortfolio'); ?></div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
