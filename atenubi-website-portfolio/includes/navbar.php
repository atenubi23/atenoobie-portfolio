<?php if (!isset($activePage)) { $activePage = ''; } ?>
<nav class="site-navbar">
  <div class="container-narrow d-flex align-items-center justify-content-between">
    <a href="index.php" class="brand text-decoration-none">
      Atenoobie<small>Software Developer</small>
    </a>

    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation" style="border-color: var(--line);">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse flex-grow-0" id="mainNav">
      <ul class="navbar-nav flex-lg-row gap-lg-1 pt-3 pt-lg-0">
        <li class="nav-item"><a class="nav-link <?= $activePage === 'home' ? 'active' : '' ?>" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link <?= $activePage === 'about' ? 'active' : '' ?>" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link <?= $activePage === 'portfolio' ? 'active' : '' ?>" href="portfolio.php">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link <?= $activePage === 'services' ? 'active' : '' ?>" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php#contact">Contact</a></li>
      </ul>
    </div>

    <a href="about.php#contact" class="btn btn-amber d-none d-lg-inline-flex">Get in touch</a>
  </div>
</nav>
