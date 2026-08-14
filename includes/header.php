<?php
declare(strict_types=1);

$active_nav = $active_nav ?? '';
?>
  <header class="topbar">
    <div class="container topbar-inner">
      <div class="contact">
        <i class="fa fa-phone"></i> <?= SITE_PHONE ?> &nbsp;
        <i class="fa fa-envelope"></i> <?= SITE_EMAIL ?>
      </div>
      <div class="socials">
        Follow Us :
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </header>

  <nav class="navbar">
    <div class="container nav-inner">
      <div class="brand">
        <a href="<?= nav_link('#home') ?>">
          <img src="<?= asset('assets/besa-logo.png') ?>" alt="BESA Logo" class="logo">
        </a>
      </div>
      <button id="mobileToggle" class="mobile-toggle" aria-label="Toggle menu"><i class="fa fa-bars"></i></button>
      <ul class="nav-links">
<?php foreach (NAV_ITEMS as $id => $label): ?>
        <li<?= $id === 'products' ? ' class="has-sub"' : '' ?>>
          <a href="<?= nav_link('#' . $id) ?>"<?= nav_active($id, $active_nav) ?>><?= e($label) ?></a>
        </li>
<?php endforeach; ?>
      </ul>
      <a class="btn-quote" href="<?= nav_link('#contact') ?>">Get A Quote</a>
    </div>
  </nav>
