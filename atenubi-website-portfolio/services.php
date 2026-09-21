<?php
$pageTitle = 'Services & Pricing — Atenoobie';
$pageDescription = 'Workflow automation, custom software development, data processing, and database design — services and pricing tiers.';
$activePage = 'services';
require 'includes/header.php';
require 'includes/icons.php';
require 'includes/partials.php';
require 'data/services.php';
require 'data/faqs.php';
require 'includes/navbar.php';
?>

<!-- Services header -->
<section class="hero">
  <div class="container-narrow">
    <span class="eyebrow">Services</span>
    <h1>Four ways I help you stop doing a process by hand.</h1>
    <p class="lede mt-3">Every engagement starts small — a conversation about what the manual version of the task actually looks like — and scales to whatever the problem needs.</p>
  </div>
</section>

<!-- Feature: primary service -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6">
        <span class="eyebrow">Primary focus</span>
        <h2>Tailored software over off-the-shelf tools.</h2>
        <p class="mt-3">Generic software makes you adapt your process to fit the tool. I build the reverse: a tool shaped around how your process already works, so adopting it doesn't mean retraining everyone from scratch.</p>
      </div>
      <div class="col-lg-6">
        <div class="row row-cols-2 g-3">
          <?php foreach ($services as $s): ?>
          <div class="col">
            <div class="tool-card h-100">
              <div class="icon text-pine mb-2" style="width:2rem;"><?= icon($s['icon']) ?></div>
              <h4 style="font-size:0.98rem;"><?= htmlspecialchars($s['title']) ?></h4>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features list: specifics -->
<section class="section">
  <div class="container-narrow">
    <div class="section-head"><span class="eyebrow">In detail</span><h2>What each service actually covers.</h2></div>
    <div class="row">
      <div class="col-lg-10">
        <?php foreach ($services as $s): ?>
        <div class="feature-row">
          <div class="icon"><?= icon($s['icon']) ?></div>
          <div><h4><?= htmlspecialchars($s['title']) ?></h4><p><?= htmlspecialchars($s['description']) ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- How it works -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="row gy-5">
      <div class="col-lg-4">
        <span class="eyebrow">Engagement model</span>
        <h2>From first message to handoff.</h2>
      </div>
      <div class="col-lg-8">
        <div class="step">
          <div class="step-num"><?= icon('search') ?></div>
          <div><h4>Free intro call</h4><p>A short conversation about the process, no commitment — mainly to see if it's a good fit.</p></div>
        </div>
        <div class="step">
          <div class="step-num"><?= icon('build') ?></div>
          <div><h4>Scoping &amp; quote</h4><p>A written scope and a price from the tiers below, adjusted to the actual size of the problem.</p></div>
        </div>
        <div class="step">
          <div class="step-num"><?= icon('code') ?></div>
          <div><h4>Build in sprints</h4><p>Regular check-ins so you can see progress and flag changes early, not after launch.</p></div>
        </div>
        <div class="step">
          <div class="step-num"><?= icon('ship') ?></div>
          <div><h4>Deploy &amp; support</h4><p>Setup docs, a walkthrough, and a support window included with every custom build.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Benefits -->
<section class="section">
  <div class="container-narrow">
    <div class="section-head"><span class="eyebrow">Outcomes</span><h2>What this changes day to day.</h2></div>
    <div class="row row-cols-1 row-cols-sm-3 g-4">
      <div class="col"><h4 class="text-pine">Lower operating costs</h4><p class="small">Fewer hours spent on tasks a script can do in seconds.</p></div>
      <div class="col"><h4 class="text-pine">Increased efficiency</h4><p class="small">Reports and stock counts that update themselves instead of waiting on someone's free time.</p></div>
      <div class="col"><h4 class="text-pine">Minimized human error</h4><p class="small">Validation built into the system, catching mistakes before they become someone else's problem.</p></div>
    </div>
  </div>
</section>

<!-- Pricing -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="section-head text-center mx-auto"><span class="eyebrow">Pricing</span><h2>Straightforward tiers, scoped to fit.</h2></div>
    <div class="row g-4">
      <?php foreach ($pricingTiers as $tier): ?>
      <div class="col-md-4">
        <div class="pricing-card <?= $tier['highlighted'] ? 'highlighted' : '' ?>">
          <?php if ($tier['highlighted']): ?><span class="tag tag-pine align-self-start">Most common</span><?php endif; ?>
          <h3 class="mt-2"><?= htmlspecialchars($tier['name']) ?></h3>
          <p class="small mb-0"><?= htmlspecialchars($tier['description']) ?></p>
          <div class="price"><?= htmlspecialchars($tier['price']) ?></div>
          <div class="period"><?= htmlspecialchars($tier['period']) ?></div>
          <ul>
            <?php foreach ($tier['features'] as $f): ?><li><?= htmlspecialchars($f) ?></li><?php endforeach; ?>
          </ul>
          <a href="about.php#contact" class="btn <?= $tier['highlighted'] ? 'btn-amber' : 'btn-outline-ink' ?> mt-auto">Get started</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Pricing comparison -->
<section class="section">
  <div class="container-narrow">
    <div class="section-head"><span class="eyebrow">Side by side</span><h2>Which tier fits your engagement.</h2></div>
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr style="font-family: var(--font-mono); font-size:0.8rem; color: var(--ink-faint);">
            <th></th>
            <th>Starter</th>
            <th>Custom Build</th>
            <th>Ongoing Support</th>
          </tr>
        </thead>
        <tbody style="font-size:0.92rem;">
          <tr><td>Best for</td><td>A single script</td><td>A full system</td><td>Systems already live</td></tr>
          <tr><td>Database design</td><td>—</td><td><?= icon('check') ?></td><td>—</td></tr>
          <tr><td>Revisions</td><td>1 round</td><td>3 rounds</td><td>Ongoing</td></tr>
          <tr><td>Post-launch support</td><td>—</td><td>2 weeks</td><td>Monthly</td></tr>
          <tr><td>Typical timeline</td><td>Days</td><td>Weeks</td><td>Continuous</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Testimonial -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="testimonial">
      <?= icon('quote') ?>
      <blockquote class="mt-3">Scoping felt honest — I got a clear price for exactly what I needed, not an upsell.</blockquote>
      <p class="attribution">— Small business client</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container-narrow">
    <?php renderCta('Ready for a free assessment of your workflow?', 'A short call is enough to tell you whether automation is worth it here.', 'Book a free assessment', 'about.php#contact'); ?>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="row gy-4">
      <div class="col-lg-4"><span class="eyebrow">FAQ</span><h2>Services &amp; pricing.</h2></div>
      <div class="col-lg-8"><?php renderFaqAccordion(array_merge($allFaqs['general'], $allFaqs['timeline']), 'faqServices'); ?></div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
