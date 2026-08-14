<?php
declare(strict_types=1);

$page_title = $title ?? SITE_NAME . ' — ' . SITE_TAGLINE;
$page_description = $description ?? 'BESA Life Safety — Fire Detection, Fire Fighting, Gas Leak Detection, PA and Life Safety solutions.';
$page_keywords = $keywords ?? '';
$active_nav = $active_nav ?? '';
$footer_id = $footer_id ?? '';

require __DIR__ . '/head.php';
require __DIR__ . '/header.php';
?>
  <main>
<?php require $viewFile; ?>
  </main>
<?php require __DIR__ . '/footer.php'; ?>
