<?php
declare(strict_types=1);

/** Primary navigation items */
const NAV_ITEMS = [
    'home' => 'Home',
    'fire-alarm-system' => 'Fire Alarm System',
    'fire-fighting-system' => 'Fire Fighting System',
    'pa-system' => 'PA System',
    'fire-safety-audit' => 'Fire Safety Audit',
    'amc' => 'AMC & Maintenance',
    'besa-products' => 'BESA Products',
    'authorized-suppliers' => 'Authorized Suppliers',
    'projects' => 'Projects',
];

const NAV_LINKS = [
    'home' => 'home',
    'fire-alarm-system' => 'fire-alarm-system',
    'fire-fighting-system' => 'fire-fighting-system',
    'pa-system' => 'pa-system',
    'fire-safety-audit' => 'fire-safety-audit',
    'amc' => 'fire-alarm-amc',
    'besa-products' => '#products',
    'authorized-suppliers' => '#catalog',
    'projects' => 'projects',
];
const NAV_DROPDOWNS = [
    'fire-alarm-system' => [
        ['label' => 'Addressable Fire Alarm System', 'href' => 'fire-alarm-system'],
        ['label' => 'Conventional Fire Alarm System', 'href' => 'fire-alarm-system'],
        ['label' => 'Fire Alarm Installation', 'href' => 'fire-alarm-system#installation'],
        ['label' => 'Fire Alarm AMC', 'href' => 'fire-alarm-amc'],
    ],
    'fire-fighting-system' => [
        ['label' => 'Fire Hydrant System', 'href' => 'fire-hydrant-system'],
        ['label' => 'Fire Sprinkler System', 'href' => 'fire-sprinkler-system'],
        ['label' => 'Fire Pump System', 'href' => 'fire-fighting-system'],
    ],
    'besa-products' => [
        ['label' => 'Gas Detector (GLD)', 'href' => 'gas-detector'],
        ['label' => 'Talk Back System', 'href' => 'talk-back-system'],
    ],
    'authorized-suppliers' => [
        ['label' => 'Eaton Cooper', 'href' => 'eaton-products'],
        ['label' => 'Ekavis', 'href' => 'ekavis-products'],
    ],
];

const PROJECT_TYPES = [
    'Industrial' => ['label' => '01 / Industrial', 'title' => 'Industrial Projects', 'description' => 'Fire alarm, hydrant, sprinkler and emergency communication systems for plants, warehouses and process facilities.', 'icon' => 'fa-industry'],
    'Commercial' => ['label' => '02 / Commercial', 'title' => 'Commercial Projects', 'description' => 'Integrated protection and emergency communication solutions for hospitals, offices and public infrastructure.', 'icon' => 'fa-building'],
    'Residential' => ['label' => '03 / Residential', 'title' => 'Residential Projects', 'description' => 'Dependable fire detection and firefighting systems for residential towers, societies and mixed-use developments.', 'icon' => 'fa-house'],
];

const PROJECTS = [
    ['name' => 'Valmet Pvt. Ltd.', 'type' => 'Industrial', 'location' => 'Pune', 'image' => 'assets/Clients/Valmet.png', 'description' => ''],
    ['name' => 'Thermax Pvt. Ltd.', 'type' => 'Industrial', 'location' => 'Pimpri-Chinchwad', 'image' => 'assets/Clients/Thermax.png', 'description' => ''],
    ['name' => 'Parakh Foods & Oils Ltd.', 'type' => 'Industrial', 'location' => 'Kurkumbh, Daund', 'image' => 'assets/Clients/Parakh_foods.png', 'description' => ''],
    ['name' => 'Jehangir Hospital', 'type' => 'Commercial', 'location' => 'Pune', 'image' => 'assets/Clients/jehangir_hospital.png', 'description' => ''],
    ['name' => 'Pune International Airport', 'type' => 'Commercial', 'location' => 'Lohegaon, Pune', 'image' => 'assets/Clients/Pune_International_Airport.png', 'description' => ''],
    ['name' => 'Shapoorji Pallonji Joyville', 'type' => 'Residential', 'location' => 'Manjari, Pune', 'image' => 'assets/Clients/shapurji_manjri.jpg', 'description' => ''],
];

define('SITE_NAME', 'BESA Life Safety');
define('SITE_URL', 'https://besasafety.com');
define('SITE_TAGLINE', 'Protecting Lives, Securing Spaces');
define('SITE_PHONE', '+91 8956929705');
define('SITE_EMAIL', 'info@besasafety.com');
define('ENQUIRY_EMAIL', 'enquiry@besasafety.com');
define('SITE_ADDRESS', '1St Floor, Seva Homes ,Near Daffodil school, Balewadi Road, Balewadi, Pune, Maharashtra, 411045');
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
    $script = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
    $request_path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');

    return $script === 'index.php' && ($request_path === '' || $request_path === 'index.php');
}

function nav_link(string $anchor): string
{
    return is_home() ? $anchor : url('index.php' . $anchor);
}

function nav_item_link(string $item): string
{
    $link = NAV_LINKS[$item] ?? '#';
    return $link[0] === '#' ? nav_link($link) : url($link);
}

function page_url(string $page): string
{
    return url($page . '.php');
}

function canonical_url(): string
{
    $path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
    $path = preg_replace('/\.php$/', '', $path) ?? $path;
    if ($path === 'index' || $path === 'home' || $path === '') {
        return SITE_URL . '/';
    }

    return SITE_URL . '/' . ltrim($path, '/');
}
