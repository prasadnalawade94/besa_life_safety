<?php
declare(strict_types=1);

/** Primary navigation items */
const NAV_ITEMS = [
    'home' => 'Home',
    'about' => 'About Us',
    'products' => 'Products',
    'services' => 'Services',
    'projects' => 'Projects',
    'contact' => 'Contact Us',
];

define('SITE_NAME', 'BESA Life Safety');
define('SITE_TAGLINE', 'Protecting Lives, Securing Spaces');
define('SITE_PHONE', '+91 8956929705');
define('SITE_EMAIL', 'info@besasafety.com');
define('SITE_ADDRESS', '1St Floor, Flat No 101, Seva Homes,Near Daffodil school, Balewadi Road, Balewadi, Pune, Maharashtra, 411045');
define('CSS_VERSION', '20260814');

function base_path(): string
{
    static $base = null;
    if ($base !== null) {
        return $base;
    }
    $dir = dirname($_SERVER['SCRIPT_NAME'] ?? '/index.php');
    $base = ($dir === '/' || $dir === '\\' || $dir === '.') ? '' : rtrim(str_replace('\\', '/', $dir), '/');
    return $base;
}

function url(string $path = ''): string
{
    $base = base_path();
    $prefix = $base === '' ? '' : $base;

    if ($path === '' || $path === '/') {
        return $prefix . '/index.php';
    }
    if ($path[0] === '#') {
        return $prefix . '/index.php' . $path;
    }
    if (preg_match('#^(https?://|mailto:|tel:)#', $path)) {
        return $path;
    }
    return $prefix . '/' . ltrim($path, '/');
}

function asset(string $path): string
{
    return url($path);
}

function is_home(): bool
{
    return basename($_SERVER['SCRIPT_NAME'] ?? 'index.php') === 'index.php';
}

function nav_link(string $anchor): string
{
    return is_home() ? $anchor : url('index.php' . $anchor);
}

function page_url(string $page): string
{
    return url($page . '.php');
}
