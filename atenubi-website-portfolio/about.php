<?php
$pageTitle = 'About — Atenoobie';
$pageDescription = 'A recent computer science graduate in Quezon City, Philippines, building software that removes manual work from small processes.';
$activePage = 'about';
require 'includes/header.php';
require 'includes/icons.php';
require 'includes/partials.php';
require 'data/faqs.php';
require 'includes/navbar.php';
?>

<!-- About Section -->
<section class="hero">
  <div class="container-narrow">
    <div class="row align-items-center gy-5">
      <div class="col-lg-7">
        <span class="eyebrow">About</span>
        <h1>I build the system that replaces the notebook.</h1>
        <p class="lede mt-3">I'm a recent computer science graduate based in Quezon City, working toward a junior developer role while building real tools for real processes — a café's stock tracker, a farmer's soil test, a patient's medication schedule.</p>
        <p class="lede">My interest isn't automation as a buzzword. It's specifically the moment a task moves from "someone has to remember to do this by hand" to "the system just handles it."</p>
      </div>
      <div class="col-lg-5">
        <div class="team-card">
          <div class="avatar-mark">A</div>
          <h3 class="mb-1">Atenoobie</h3>
          <p class="small-caption mb-3">Software Developer · Quezon City, PH</p>
          <p class="small mb-0">Python &amp; MySQL as a core stack, with PHP, Flutter, and data tools brought in depending on the problem. Currently deepening data structures &amp; algorithms and Java OOP fundamentals alongside project work.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="row row-cols-2 row-cols-md-4 g-4">
      <div class="col"><div class="stat-block"><span class="num">5</span><span class="label">projects built, from thesis work to solo portfolio pieces</span></div></div>
      <div class="col"><div class="stat-block"><span class="num">~93%</span><span class="label">accuracy on the on-device soil-detection model</span></div></div>
      <div class="col"><div class="stat-block"><span class="num">2</span><span class="label">core languages in daily use — Python and SQL</span></div></div>
      <div class="col"><div class="stat-block"><span class="num">1</span><span class="label">system currently in active pilot with a real café</span></div></div>
    </div>
  </div>
</section>

<!-- Feature: philosophy -->
<section class="section">
  <div class="container-narrow">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6 order-lg-2">
        <span class="eyebrow">Philosophy</span>
        <h2>Complexity belongs in the system, not the user.</h2>
        <p class="mt-3">A manual process feels simple because it's familiar, not because it's actually simple — that's exactly why it's error-prone. My job is to absorb that complexity into the schema and the logic, so the person using the system just sees a clear, small interface.</p>
      </div>
      <div class="col-lg-6 order-lg-1">
        <svg viewBox="0 0 420 260" width="100%" role="img" aria-label="Diagram showing scattered steps consolidating into one clear interface">
          <g stroke="#b9ae98" stroke-width="1.3" fill="none" stroke-dasharray="3 4">
            <circle cx="60" cy="40" r="18"/><circle cx="120" cy="90" r="14"/><circle cx="50" cy="140" r="16"/>
            <circle cx="130" cy="180" r="12"/><circle cx="70" cy="220" r="14"/>
          </g>
          <path d="M76 46 L190 128 M124 100 L190 128 M64 148 L190 128 M136 176 L190 128 M82 214 L190 128" stroke="#ddd5c4" stroke-width="1"/>
          <rect x="190" y="98" width="150" height="60" rx="8" fill="#2f6e5c"/>
          <text x="265" y="133" text-anchor="middle" font-family="Fraunces, serif" font-size="15" fill="#fff">one interface</text>
        </svg>
      </div>
    </div>
  </div>
</section>

<!-- Features List: values -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="section-head"><span class="eyebrow">What I bring</span><h2>Values that shape how I build.</h2></div>
    <div class="row">
      <div class="col-lg-10">
        <div class="feature-row">
          <div class="icon"><?= icon('search') ?></div>
          <div><h4>Research before code</h4><p>Every project starts with understanding the real workflow, ERD-first, before a single screen gets built.</p></div>
        </div>
        <div class="feature-row">
          <div class="icon"><?= icon('check') ?></div>
          <div><h4>Reliability over flash</h4><p>A stock-sync function that never drifts matters more than a feature that looks impressive in a demo.</p></div>
        </div>
        <div class="feature-row">
          <div class="icon"><?= icon('automation') ?></div>
          <div><h4>Client-first framing</h4><p>The measure of a good system is whether it disappears into someone's day — not how clever the code is underneath.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Benefits -->
<section class="section">
  <div class="container-narrow">
    <div class="row gy-4">
      <div class="col-lg-5">
        <span class="eyebrow">Why work with me</span>
        <h2>What clients get out of this.</h2>
      </div>
      <div class="col-lg-7">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col"><h4 class="text-pine">Lower operating costs</h4><p class="small">Less time spent on manual recounts and re-entry means more time on the work that actually grows the business.</p></div>
          <div class="col"><h4 class="text-pine">Fewer errors</h4><p class="small">Automated sync catches mismatches a manual count would miss until it's too late.</p></div>
          <div class="col"><h4 class="text-pine">A system you understand</h4><p class="small">Plain-language documentation and a walkthrough — no black box you're afraid to touch.</p></div>
          <div class="col"><h4 class="text-pine">Room to grow</h4><p class="small">Schemas designed with headroom, so adding a feature later doesn't mean rebuilding from scratch.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Logo list: stack -->
<section class="section section-alt">
  <div class="container-narrow">
    <div class="section-head"><span class="eyebrow">Tools &amp; platforms</span><h2>What I build with.</h2></div>
    <div class="logo-strip">
      <?php foreach (['Python','MySQL','PHP','JavaScript','Bootstrap','Flutter','TFLite','pandas','XAMPP','Git'] as $tech): ?>
        <span class="logo-pill"><?= htmlspecialchars($tech) ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Contact -->
<section class="section" id="contact">
  <div class="container-narrow">
    <div class="row gy-5">
      <div class="col-lg-5">
        <span class="eyebrow">Contact</span>
        <h2>Tell me about the process you want off your plate.</h2>
        <p class="mt-3">Whether it's a full system or a quick script, I read every message myself and reply within a couple of days.</p>
        <p class="small-caption mt-4">hello@atenoobie.dev<br>Quezon City, Philippines</p>
      </div>
      <div class="col-lg-7">
        <form id="contactForm" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label class="form-label" for="cName">Name</label>
              <input type="text" class="form-control" id="cName" name="name" required>
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="cEmail">Email</label>
              <input type="email" class="form-control" id="cEmail" name="email" required>
            </div>
            <div class="col-12">
              <label class="form-label" for="cSubject">What do you need?</label>
              <select class="form-select" id="cSubject" name="subject">
                <option>Custom software project</option>
                <option>Workflow automation</option>
                <option>Just want to connect</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label" for="cMessage">Message</label>
              <textarea class="form-control" id="cMessage" name="message" rows="5" required></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-pine mt-3">Send message</button>
          <div class="form-status" id="contactStatus" role="status"></div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section section-alt">
  <div class="container-narrow">
    <?php renderCta('Curious what a system built for your process would look like?', 'Have a look at completed projects, or jump straight to services and pricing.', 'View portfolio', 'portfolio.php'); ?>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="container-narrow">
    <div class="row gy-4">
      <div class="col-lg-4"><span class="eyebrow">FAQ</span><h2>Working together.</h2></div>
      <div class="col-lg-8"><?php renderFaqAccordion($allFaqs['process'], 'faqAbout'); ?></div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
