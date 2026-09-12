<section class="service-page">
  <div class="container">
    <div class="page-header">
      <div class="page-headline">BESA LIFE SAFETY | INDIA</div>
      <h1><?= e($service['title']) ?></h1>
      <p class="page-intro"><?= e($service['intro']) ?></p>
    </div>

    <div class="service-page-hero">
      <div class="service-page-hero-copy">
        <span class="service-page-kicker">Complete service from design to AMC</span>
        <h2><?= e($service['heading']) ?></h2>
        <p><?= e($service['content']) ?></p>
        <a class="btn-primary" href="#quote-modal" data-quote-open>Discuss Your Requirement</a>
      </div>
      <figure class="service-page-image">
        <img src="<?= asset($service['image']) ?>" alt="<?= e($service['image_alt']) ?>">
      </figure>
    </div>

    <div class="service-page-facts">
<?php foreach ($service['facts'] as $fact): ?>
      <div class="service-fact-card">
        <i class="fa <?= e($fact['icon']) ?>" aria-hidden="true"></i>
        <strong><?= e($fact['title']) ?></strong>
        <span><?= e($fact['text']) ?></span>
      </div>
<?php endforeach; ?>
    </div>

<?php if (!empty($service['scope_groups'])): ?>
    <section class="service-scope-section">
      <div class="service-section-heading">
        <span class="service-page-kicker">AMC Coverage</span>
        <h2>Systems Covered Under AMC &amp; Maintenance</h2>
        <p>Our maintenance team supports the following fire and life safety systems through planned inspections, testing and corrective service.</p>
      </div>
      <div class="service-scope-grid">
<?php foreach ($service['scope_groups'] as $group): ?>
        <article class="service-scope-card">
          <i class="fa <?= e($group['icon']) ?>" aria-hidden="true"></i>
          <h3><?= e($group['title']) ?></h3>
          <ul>
<?php foreach ($group['items'] as $item): ?>
            <li><?= e($item) ?></li>
<?php endforeach; ?>
          </ul>
        </article>
<?php endforeach; ?>
      </div>
    </section>
<?php endif; ?>

    <div class="service-page-grid">
      <div class="service-page-main">
        <h2>What We Do</h2>
        <p><?= e($service['work']) ?></p>
        <div class="service-feature-list">
<?php foreach ($service['features'] as $feature): ?>
          <div class="service-feature-item">
            <i class="fa fa-shield-halved" aria-hidden="true"></i>
            <span><?= e($feature) ?></span>
          </div>
<?php endforeach; ?>
        </div>
        <h2 class="service-subheading">Our Work Process</h2>
        <div class="service-process-list">
      <?php foreach ($service['process'] as $index => $step): ?>
          <div class="service-process-item"><strong><?= $index + 1 ?></strong><span><?= e($step) ?></span></div>
      <?php endforeach; ?>
        </div>
      </div>
      <aside class="service-page-aside">
        <i class="fa <?= e($service['icon']) ?>" aria-hidden="true"></i>
        <h2>Why BESA Life Safety?</h2>
        <p><?= e($service['why']) ?></p>
        <a class="btn-primary" href="#quote-modal" data-quote-open>Request a Quote</a>
      </aside>
    </div>

    <div class="service-page-detail-grid">
      <section class="service-detail-panel">
        <h2><i class="fa fa-building" aria-hidden="true"></i> Where It Is Used</h2>
        <div class="service-detail-list">
<?php foreach ($service['applications'] as $application): ?>
          <div><i class="fa fa-check" aria-hidden="true"></i><?= e($application) ?></div>
<?php endforeach; ?>
        </div>
      </section>
      <section class="service-detail-panel">
        <h2><i class="fa fa-cubes" aria-hidden="true"></i> What We Provide</h2>
        <div class="service-detail-list">
<?php foreach ($service['components'] as $component): ?>
          <div><i class="fa fa-check" aria-hidden="true"></i><?= e($component) ?></div>
<?php endforeach; ?>
        </div>
      </section>
    </div>

    <section class="service-deliverables">
      <h2>Project Deliverables</h2>
      <div class="service-deliverable-row">
<?php foreach ($service['deliverables'] as $deliverable): ?>
        <span><i class="fa fa-circle-check" aria-hidden="true"></i><?= e($deliverable) ?></span>
<?php endforeach; ?>
      </div>
    </section>

<?php if (!empty($service['licenses'])): ?>
    <section class="service-license-section">
      <div class="service-license-badge"><i class="fa fa-certificate" aria-hidden="true"></i></div>
      <div>
        <span class="service-page-kicker">Government of Maharashtra</span>
        <h2>Licensed Agency</h2>
        <p>BESA Life Safety is a Government of Maharashtra licensed agency for:</p>
        <div class="service-license-list">
<?php foreach ($service['licenses'] as $index => $license): ?>
          <span><strong><?= $index + 1 ?></strong><?= e($license) ?></span>
<?php endforeach; ?>
        </div>
      </div>
    </section>
<?php endif; ?>

    <div class="service-page-actions">
      <a class="btn-outline" href="<?= nav_link('#services') ?>">Back to Services</a>
      <a class="btn-secondary" href="#quote-modal" data-quote-open>Contact BESA Life Safety</a>
    </div>
  </div>
</section>
