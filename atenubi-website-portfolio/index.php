<?php
$pageTitle = 'Atenoobie — Software Developer for Manual Workload Problems';
$pageDescription = 'I build small, focused software tools that take repetitive manual work off your plate — inventory systems, data pipelines, and workflow automation.';
$activePage = 'home';
require 'includes/header.php';
require 'includes/icons.php';
require 'includes/partials.php';
require 'data/projects.php';
require 'data/faqs.php';
require 'includes/navbar.php';
?>

<!-- Hero -->
<section class="hero">
  <div class="container-narrow">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6">
        <span class="eyebrow">Junior Software Developer</span>
        <h1>Software that takes the manual step out of your process.</h1>
        <p class="lede mt-3">I design and build small, focused tools — inventory trackers, data pipelines, scheduling systems — for the parts of a workflow still running on notebooks and spreadsheets.</p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="services.php" class="btn btn-amber btn-lg">Explore services</a>
          <a href="portfolio.php" class="btn btn-outline-ink btn-lg">See the portfolio</a>
        </div>
      </div>
      <div class="col-lg-6">
        <svg viewBox="0 0 480 320" width="100%" role="img" aria-label="Diagram of a manual process turning into an automated one">
          <defs>
            <marker id="arrow" markerWidth="8" markerHeight="8" refX="6" refY="4" orient="auto">
              <path d="M0,0 L8,4 L0,8 z" fill="#8a8375"/>
            </marker>
          </defs>
          <!-- manual side -->
          <g fill="none" stroke="#b9ae98" stroke-width="1.4">
            <rect x="10" y="30" width="120" height="34" rx="4" stroke-dasharray="3 4"/>
            <rect x="10" y="90" width="120" height="34" rx="4" stroke-dasharray="3 4"/>
            <rect x="10" y="150" width="120" height="34" rx="4" stroke-dasharray="3 4"/>
          </g>
          <g font-family="IBM Plex Mono, monospace" font-size="11" fill="#8a8375">
            <text x="24" y="51">count stock by hand</text>
            <text x="24" y="111">copy into a sheet</text>
            <text x="24" y="171">re-check for errors</text>
          </g>
          <path d="M140 47 H210" stroke="#b9ae98" stroke-width="1.2" marker-end="url(#arrow)"/>
          <path d="M140 107 H210" stroke="#b9ae98" stroke-width="1.2" marker-end="url(#arrow)"/>
          <path d="M140 167 H210" stroke="#b9ae98" stroke-width="1.2" marker-end="url(#arrow)"/>
          <!-- funnel -->
          <path d="M215 40 L215 175 L245 107 Z" fill="#c2793b" opacity="0.9"/>
          <!-- automated side -->
          <rect x="270" y="70" width="200" height="90" rx="8" fill="#2f6e5c"/>
          <text x="370" y="100" text-anchor="middle" font-family="Fraunces, serif" font-size="16" fill="#fff">one system</text>
          <text x="370" y="122" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="11" fill="#dff0ea">stock ↕ sales</text>
          <text x="370" y="140" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="11" fill="#dff0ea">synced, always</text>
        </svg>
      </div>
    </div>
  </div>
</section>

<!-- Feature Section: core value proposition -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6">
        <span class="eyebrow">Why automate</span>
        <h2>Manual processes cost more than they look like they do.</h2>
        <p class="mt-3">Every hand-counted stock sheet and every copy-pasted report is a place where time leaks out and small errors sneak in. The fix usually isn't more discipline — it's a system that does the repetitive part automatically, so mistakes get caught before they become a problem.</p>
      </div>
      <div class="col-lg-6">
        <div class="row row-cols-2 g-3">
          <div class="col"><div class="stat-block"><span class="num">100%</span><span class="label">of stock updates automatic in Rise &amp; Brew</span></div></div>
          <div class="col"><div class="stat-block"><span class="num">~93%</span><span class="label">accuracy on the on-device soil model</span></div></div>
          <div class="col"><div class="stat-block"><span class="num">0</span><span class="label">manual recounts once a system is in place</span></div></div>
          <div class="col"><div class="stat-block"><span class="num">2+</span><span class="label">years across academic and independent builds</span></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features List: key areas of expertise -->
<section class="section">
  <div class="container-narrow">
    <div class="section-head">
      <span class="eyebrow">Areas of expertise</span>
      <h2>Where I focus.</h2>
    </div>
    <div class="row">
      <div class="col-lg-10">
        <div class="feature-row">
          <div class="icon"><?= icon('automation') ?></div>
          <div><h4>Workflow automation</h4><p>Scripting the repetitive steps out of a process, so a person only handles the parts that need judgment.</p></div>
        </div>
        <div class="feature-row">
          <div class="icon"><?= icon('code') ?></div>
          <div><h4>Custom software development</h4><p>Applications built around your actual process — from database schema through to the interface.</p></div>
        </div>
        <div class="feature-row">
          <div class="icon"><?= icon('data') ?></div>
          <div><h4>Data processing</h4><p>Turning raw CSVs and scattered records into validated, structured data you can actually trust.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="row gy-5">
      <div class="col-lg-4">
        <span class="eyebrow">Process</span>
        <h2>From manual pain point to working system.</h2>
        <p class="mt-3">The same four-step process behind every project on this site, scaled to fit the size of the problem.</p>
      </div>
      <div class="col-lg-8">
        <div class="step">
          <div class="step-num"><?= icon('search') ?></div>
          <div><h4>Find the actual pain point</h4><p>I watch the manual process as it happens, not just how it's described — that's where the real requirements show up.</p></div>
        </div>
        <div class="step">
          <div class="step-num"><?= icon('database') ?></div>
          <div><h4>Design the data model</h4><p>Schema or data structure comes first, before any interface — it's what keeps the system consistent as it grows.</p></div>
        </div>
        <div class="step">
          <div class="step-num"><?= icon('build') ?></div>
          <div><h4>Build in small increments</h4><p>Working software in short cycles, so you can see progress and redirect early if something's off.</p></div>
        </div>
        <div class="step">
          <div class="step-num"><?= icon('ship') ?></div>
          <div><h4>Hand it off, then support it</h4><p>Setup instructions, a walkthrough, and a support window after launch — not a system you're left to figure out alone.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Ecommerce / Products List -->
<section class="section">
  <div class="container-narrow">
    <div class="section-head d-flex flex-wrap justify-content-between align-items-end gap-3">
      <div>
        <span class="eyebrow">Tools &amp; templates</span>
        <h2>Software built to eliminate one manual task at a time.</h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="tool-card">
          <div class="icon text-pine mb-2" style="width:2.2rem;"><?= icon('inventory') ?></div>
          <h4>Stock Sync Starter Kit</h4>
          <p class="small">A Python + MySQL starter schema and sync script for small-shop inventory, based on the Rise &amp; Brew system.</p>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <strong class="text-amber">₱1,500</strong>
            <a href="portfolio.php" class="small">See it in use →</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="tool-card">
          <div class="icon text-pine mb-2" style="width:2.2rem;"><?= icon('csv') ?></div>
          <h4>CSV Cleanup Script</h4>
          <p class="small">A pandas-based script that validates and de-duplicates messy CSV exports before they hit your reports.</p>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <strong class="text-amber">Free</strong>
            <a href="portfolio.php" class="small">See it in use →</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="tool-card">
          <div class="icon text-pine mb-2" style="width:2.2rem;"><?= icon('data') ?></div>
          <h4>Report Auto-Builder</h4>
          <p class="small">Turns a raw sales export into a formatted weekly report, scheduled to run on its own.</p>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <strong class="text-amber">Coming soon</strong>
            <span class="small text-muted">In development</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonial -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="testimonial">
      <?= icon('quote') ?>
      <blockquote class="mt-3">Before this, closing stock at the end of the day meant re-counting everything by hand. Now the numbers just match.</blockquote>
      <p class="attribution">— Café owner, Rise &amp; Brew Inventory pilot</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container-narrow">
    <?php renderCta('Have a manual process worth automating?', 'Tell me what it looks like today — I\'ll tell you what a system for it could look like.', 'Schedule a chat', 'about.php#contact'); ?>
  </div>
</section>

<!-- Newsletter -->
<section class="section section-alt" id="newsletter">
  <div class="container-narrow">
    <div class="newsletter-box">
      <div class="row align-items-center gy-3">
        <div class="col-lg-6">
          <h2>Get new tools and project notes.</h2>
          <p class="mb-0" style="color:#dff0ea;">Occasional emails when I ship a new project or automation tool — no spam, unsubscribe anytime.</p>
        </div>
        <div class="col-lg-6">
          <form id="newsletterForm" novalidate>
            <div class="d-flex flex-column flex-sm-row gap-2">
              <input type="email" class="form-control" id="newsletterEmail" name="email" placeholder="you@example.com" required>
              <button type="submit" class="btn btn-amber flex-shrink-0">Subscribe</button>
            </div>
            <div class="form-status" id="newsletterStatus" role="status"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="container-narrow">
    <div class="row gy-4">
      <div class="col-lg-4">
        <span class="eyebrow">FAQ</span>
        <h2>Common questions.</h2>
      </div>
      <div class="col-lg-8">
        <?php renderFaqAccordion($allFaqs['general'], 'faqHome'); ?>
      </div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
<script src="js/main.js"></script>