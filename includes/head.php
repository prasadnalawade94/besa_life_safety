<?php
declare(strict_types=1);

$page_title = $page_title ?? SITE_NAME . ' — ' . SITE_TAGLINE;
$page_description = $page_description ?? 'BESA Life Safety is a Pune-based fire and life safety company providing fire alarm, fire fighting, hydrant, sprinkler, PA system, AMC, testing and commissioning solutions for industrial, commercial and residential projects.';
$page_keywords = $page_keywords ?? '';
$canonical = $canonical ?? canonical_url();
$social_image = SITE_URL . '/assets/besa-logo.png';
$schema = [
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => ['LocalBusiness', 'ProfessionalService'],
      '@id' => SITE_URL . '/#business',
      'name' => SITE_NAME,
      'url' => SITE_URL . '/',
      'logo' => $social_image,
      'image' => $social_image,
      'description' => $page_description,
      'telephone' => SITE_PHONE,
      'email' => SITE_EMAIL,
      'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => SITE_ADDRESS,
        'addressLocality' => 'Pune',
        'addressRegion' => 'Maharashtra',
        'postalCode' => '411045',
        'addressCountry' => 'IN',
      ],
      'areaServed' => ['Pune', 'Pimpri-Chinchwad', 'Maharashtra'],
      'priceRange' => '$$',
    ],
    [
      '@type' => 'WebSite',
      '@id' => SITE_URL . '/#website',
      'url' => SITE_URL . '/',
      'name' => SITE_NAME,
      'publisher' => ['@id' => SITE_URL . '/#business'],
    ],
  ],
];
if (isset($service['title'])) {
    $schema['@graph'][] = [
      '@type' => 'Service',
      'name' => $service['title'],
      'description' => $page_description,
      'url' => $canonical,
      'provider' => ['@id' => SITE_URL . '/#business'],
      'areaServed' => ['Pune', 'Maharashtra'],
    ];
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($page_title) ?></title>
  <meta name="description" content="<?= e($page_description) ?>">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <link rel="canonical" href="<?= e($canonical) ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
  <meta property="og:title" content="<?= e($page_title) ?>">
  <meta property="og:description" content="<?= e($page_description) ?>">
  <meta property="og:url" content="<?= e($canonical) ?>">
  <meta property="og:image" content="<?= e($social_image) ?>">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?= e($page_title) ?>">
  <meta name="twitter:description" content="<?= e($page_description) ?>">
  <meta name="twitter:image" content="<?= e($social_image) ?>">
  <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php if ($page_keywords !== ''): ?>
  <meta name="keywords" content="<?= e($page_keywords) ?>">
<?php endif; ?>
  <link rel="icon" href="<?= asset('assets/favicon.svg') ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>?v=<?= CSS_VERSION ?>">
</head>
<body>
