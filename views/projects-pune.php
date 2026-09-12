<?php
$projects_by_type = array_fill_keys(array_keys(PROJECT_TYPES), []);
foreach (PROJECTS as $project) {
  if (isset($projects_by_type[$project['type']])) {
    $projects_by_type[$project['type']][] = $project;
  }
}
?>
<section class="projects-page">
  <div class="container">
    <div class="page-header">
      <div class="page-headline">BESA LIFE SAFETY | PROJECT PORTFOLIO</div>
      <h1>Our <span>Projects</span></h1>
      <p class="page-intro">Fire and life safety solutions delivered for industrial, commercial and residential properties across Pune and Maharashtra.</p>
    </div>

    <div class="project-category-stack">
  <?php foreach (PROJECT_TYPES as $type => $category): ?>
      <section class="project-category" id="<?= e(strtolower($type)) ?>-projects">
        <div class="project-category-heading">
          <div><span class="project-category-label"><?= e($category['label']) ?></span><h2><?= e($category['title']) ?></h2><p><?= e($category['description']) ?></p></div>
          <i class="fa <?= e($category['icon']) ?>" aria-hidden="true"></i>
        </div>
        <div class="projects-row">
      <?php foreach ($projects_by_type[$type] as $project): ?>
          <article class="project-card"><img src="<?= asset($project['image']) ?>" alt="<?= e($project['name']) ?> project"><h3><?= e($project['name']) ?><small><?= e($project['location']) ?></small></h3><?php if ($project['description'] !== ''): ?><p><?= e($project['description']) ?></p><?php endif; ?></article>
<?php endforeach; ?>
        </div>
      </section>
<?php endforeach; ?>
    </div>

    <div class="projects-page-cta">
      <h2>Planning a new project?</h2>
      <p>Talk to BESA Life Safety about fire detection, firefighting, hydrant, sprinkler, PA and AMC requirements.</p>
      <a class="btn-primary" href="<?= nav_link('#contact') ?>">Discuss Your Project</a>
    </div>
  </div>
</section>
