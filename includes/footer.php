<?php
declare(strict_types=1);

$footer_id = $footer_id ?? '';
?>
  <footer<?= $footer_id !== '' ? ' id="' . e($footer_id) . '"' : '' ?> class="footer">
    <div class="container footer-grid">
      <div class="footer-about">
        <!-- <img src="<?= asset('assets/logo-light.svg') ?>" alt="BESA" class="logo-footer"> -->
        <p>BESA Life Safety Private Limited is committed to delivering innovative, reliable and high-quality Fire &amp; Life Safety solutions.</p>
        <!-- <div class="socials footer-socials">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div> -->
      </div>
      <div class="footer-links">
        <span style="display: flex; align-items: center; gap: 10px;">
          <i class="fa fa-link"></i>
        <h4>Quick Links</h4>
        </span>
       <div style="display: flex; gap: 50px;">
    
    <ul>
        <li><a href="<?= url('index.php') ?>">Home</a></li>
        <li><a href="<?= nav_link('#about') ?>">About Us</a></li>
        <li><a href="<?= nav_link('#services') ?>">Services</a></li>
        <li><a href="<?= page_url('eaton-products') ?>">Eaton Products</a></li>
    </ul>

    <ul>
        <li><a href="<?= page_url('ekavis-products') ?>">Ekavis Products</a></li>
        <li><a href="<?= page_url('gas-detector') ?>">Gas Detector</a></li>
        <li><a href="<?= nav_link('#projects') ?>">Projects</a></li>
        <li><a href="<?= nav_link('#contact') ?>">Contact</a></li>
    </ul>

</div>
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

  <div id="quote-modal" class="quote-modal" role="dialog" aria-modal="true" aria-labelledby="quote-title" aria-hidden="true">
    <div class="quote-dialog">
      <button type="button" class="quote-close" data-quote-close aria-label="Close quote form">&times;</button>
      <h2 id="quote-title">Get A Quote</h2>
      <p>Tell us about your fire and life safety requirement.</p>
<?php if (($quote_status ?? '') !== ''): ?>
      <p class="quote-status"><?= e($quote_status) ?></p>
<?php endif; ?>
      <form class="quote-form" method="post">
        <input type="hidden" name="quote_request" value="1">
        <div class="quote-field-row">
          <label>Name
            <input type="text" name="name" required>
          </label>
          <label>Phone
            <input type="tel" name="phone" required>
          </label>
        </div>
        <label>Email
          <input type="email" name="email" required>
        </label>
        <label>Requirement
          <textarea name="requirement" required></textarea>
        </label>
        <button class="btn-primary" type="submit">Submit Enquiry</button>
      </form>
    </div>
  </div>

  <script src="<?= asset('js/script.js') ?>?v=<?= CSS_VERSION ?>"></script>
</body>
</html>
