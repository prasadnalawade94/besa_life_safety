<?php
declare(strict_types=1);

$page_title = $title ?? SITE_NAME . ' — ' . SITE_TAGLINE;
$page_description = $description ?? 'BESA Life Safety is a Pune-based fire and life safety company providing fire alarm, fire fighting, hydrant, sprinkler, PA system, AMC, testing and commissioning solutions for industrial, commercial and residential projects.';
$page_keywords = $keywords ?? '';
$active_nav = $active_nav ?? '';
$footer_id = $footer_id ?? '';

require __DIR__ . '/head.php';
require __DIR__ . '/header.php';
?>
  <main>
<?php require $viewFile; ?>
  </main>

  </div>
<?php require __DIR__ . '/footer.php'; ?>
