<?php
declare(strict_types=1);

$page_title = $page_title ?? SITE_NAME . ' — ' . SITE_TAGLINE;
$page_description = $page_description ?? 'BESA Life Safety — Fire Detection, Fire Fighting, Gas Leak Detection, PA and Life Safety solutions.';
$page_keywords = $page_keywords ?? '';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($page_title) ?></title>
  <meta name="description" content="<?= e($page_description) ?>">
<?php if ($page_keywords !== ''): ?>
  <meta name="keywords" content="<?= e($page_keywords) ?>">
<?php endif; ?>
  <link rel="icon" href="<?= asset('assets/favicon.svg') ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>?v=<?= CSS_VERSION ?>">
</head>
<body>
