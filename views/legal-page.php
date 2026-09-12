<section class="legal-page">
  <div class="container">
    <div class="page-header">
      <div class="page-headline">BESA LIFE SAFETY</div>
      <h1><?= e($legal_title) ?></h1>
      <p class="page-intro"><?= e($legal_updated) ?></p>
    </div>
    <article class="legal-document">
<?php foreach ($legal_sections as $section): ?>
      <section class="legal-section">
        <h2><?= e($section['title']) ?></h2>
        <p><?= e($section['content']) ?></p>
      </section>
<?php endforeach; ?>
    </article>
  </div>
</section>
