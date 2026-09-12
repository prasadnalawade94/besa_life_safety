<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
render_page('service-page', [
    'title' => 'Fire Alarm System Company in India | BESA Life Safety',
    'description' => 'BESA Life Safety provides addressable and conventional fire alarm systems, installation, testing and commissioning across India.',
    'keywords' => 'fire alarm system company in Pune, addressable fire alarm system Pune, conventional fire alarm system Pune, fire alarm installation company Pune, fire alarm testing and commissioning Pune',
    'active_nav' => 'fire-alarm-system',
    'service' => [
        'title' => 'Fire Alarm System Solutions Across India',
        'intro' => 'Addressable and conventional fire alarm solutions designed to detect fire early and protect people, property and operations.',
        'heading' => 'Addressable and Conventional Fire Alarm Systems',
        'content' => 'Our team delivers complete fire alarm solutions from system design and product supply through installation, programming, testing and commissioning for all project types.',
        'work' => 'We study the building risk, occupancy and layout before selecting the right fire alarm architecture. We install and program addressable or conventional panels, detectors, MCPs, modules, sounders and interfaces before complete system handover.',
        'features' => ['Addressable fire alarm panels and devices', 'Conventional fire alarm panels and detectors', 'Fire alarm installation and programming', 'Testing, commissioning and AMC support'],
        'process' => ['Site survey, drawings and fire risk assessment', 'Addressable or conventional system design', 'Device installation, cabling and panel programming', 'Cause-and-effect testing, commissioning and training'],
        'why' => 'Early detection gives people and emergency teams valuable time to respond. BESA systems focus on reliable detection, clear alarm indication and long-term maintainability.',
        'facts' => [
            ['icon' => 'fa-crosshairs', 'title' => 'Early Detection', 'text' => 'Smoke, heat and fire sensing'],
            ['icon' => 'fa-sitemap', 'title' => 'Scalable Systems', 'text' => 'Addressable or conventional'],
            ['icon' => 'fa-bell', 'title' => 'Fast Notification', 'text' => 'Audible and visual alarms'],
        ],
        'applications' => ['Industrial plants and warehouses', 'Office buildings and commercial complexes', 'Hospitals, hotels and schools', 'Residential towers and societies'],
        'components' => ['Fire alarm control panels', 'Smoke, heat and multi-sensor detectors', 'Manual call points, sounders and beacons', 'Modules, interfaces and repeater panels'],
        'deliverables' => ['Risk assessment', 'System design', 'Installation', 'Programming', 'Testing & commissioning', 'AMC'],
        'image' => 'assets/images/fire_detection.png',
        'image_alt' => 'Fire detection and alarm system',
        'icon' => 'fa-fire-extinguisher',
    ],
]);
