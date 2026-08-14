<?php
declare(strict_types=1);

$footer_id = $footer_id ?? '';
?>
  <footer<?= $footer_id !== '' ? ' id="' . e($footer_id) . '"' : '' ?> class="footer">
    <div class="container footer-grid">
      <div class="footer-about">
        <!-- <img src="<?= asset('assets/logo-light.svg') ?>" alt="BESA" class="logo-footer"> -->
        <p>BESA Life Safety Private Limited is committed to delivering innovative, reliable and high-quality Fire &amp; Life Safety solutions.</p>
        <div class="socials footer-socials">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?= url('index.php') ?>">Home</a></li>
          <li><a href="<?= nav_link('#about') ?>">About Us</a></li>
          <li><a href="<?= nav_link('#services') ?>">Services</a></li>
          <li><a href="<?= page_url('eaton-products') ?>">Eaton Products</a></li>
          <li><a href="<?= page_url('ekavis-products') ?>">Ekavis Products</a></li>
          <li><a href="<?= page_url('gas-detector') ?>">Gas Detector</a></li>
          <li><a href="<?= nav_link('#projects') ?>">Projects</a></li>
          <li><a href="<?= nav_link('#contact') ?>">Contact</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <h4>Contact Us</h4>
        <p><i class="fa fa-phone"></i> <?= SITE_PHONE ?></p>
        <p><i class="fa fa-envelope"></i> <?= SITE_EMAIL ?></p>
        <p><?= SITE_ADDRESS ?></p>
      </div>
    </div>
    <div class="container footer-bottom">
      <p>&copy; <?= date('Y') ?> BESA Life Safety Pvt. Ltd. All Rights Reserved.</p>
      <div><a href="#">Privacy Policy</a> | <a href="#">Terms &amp; Conditions</a></div>
    </div>
  </footer>

  <script src="<?= asset('js/script.js') ?>"></script>
</body>
</html>
