<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';

$clean_routes = [
	'pa-system' => 'pa-system.php',
	'fire-alarm-system' => 'fire-alarm-system.php',
	'fire-fighting-system' => 'fire-fighting-system.php',
	'fire-hydrant-system' => 'fire-hydrant-system.php',
	'fire-sprinkler-system' => 'fire-sprinkler-system.php',
	'fire-alarm-amc' => 'fire-alarm-amc.php',
	'fire-safety-audit' => 'fire-safety-audit.php',
	'projects' => 'projects.php',
	'talk-back-system' => 'talk-back-system.php',
	'gas-detector' => 'gas-detector.php',
	'eaton-products' => 'eaton-products.php',
	'ekavis-products' => 'ekavis-products.php',
	'privacy-policy' => 'privacy-policy.php',
	'terms-conditions' => 'terms-conditions.php',
];
$requested_path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
$requested_route = basename($requested_path);

if ($requested_route === 'tack-back-system') {
	header('Location: /talk-back-system', true, 301);
	exit;
}

if (isset($clean_routes[$requested_route])) {
	require __DIR__ . '/' . $clean_routes[$requested_route];
	return;
}

render_page('home');
