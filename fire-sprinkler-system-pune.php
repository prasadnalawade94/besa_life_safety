<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
render_page('service-page', [
    'title' => 'Fire Sprinkler System Company in India | BESA Life Safety',
    'description' => 'BESA Life Safety provides automatic fire sprinkler system design, installation, testing and commissioning across India.',
    'keywords' => 'fire sprinkler system installation Pune, fire sprinkler company Pune, automatic sprinkler system Pune, fire sprinkler contractor Pune, sprinkler system design Pune',
    'active_nav' => 'fire-fighting-system',
    'service' => [
        'title' => 'Fire Sprinkler System Solutions Across India',
        'intro' => 'Automatic fire suppression systems that help control fire quickly and limit damage before it spreads.',
        'heading' => 'Automatic Fire Sprinkler Solutions',
        'content' => 'We design and install sprinkler networks with the right heads, control valves, alarm valves and flow monitoring for the occupancy and risk profile of each site.',
        'work' => 'We design the sprinkler layout, pipe network, sprinkler heads, alarm valves, flow switches and test drain arrangement according to occupancy and hazard classification. After installation, we verify flow and alarm operation in every zone.',
        'features' => ['Sprinkler system design and hydraulic planning', 'Sprinkler heads, control and alarm valves', 'Flow switches and pressure monitoring', 'Testing, commissioning and maintenance'],
        'process' => ['Occupancy, ceiling height and hazard assessment', 'Hydraulic calculation and sprinkler layout', 'Piping, heads, valves and monitoring device installation', 'Flow test, alarm test, balancing and commissioning'],
        'why' => 'Automatic sprinklers respond at the affected area before fire spreads. BESA focuses on correct coverage, accessibility and dependable water flow.',
        'facts' => [
            ['icon' => 'fa-spray-can-sparkles', 'title' => 'Automatic Response', 'text' => 'Sprinklers act at the source'],
            ['icon' => 'fa-draw-polygon', 'title' => 'Right Coverage', 'text' => 'Layout by hazard profile'],
            ['icon' => 'fa-droplet', 'title' => 'Flow Monitoring', 'text' => 'Alarm and water flow checks'],
        ],
        'applications' => ['Factories and production areas', 'Warehouses and storage facilities', 'Hotels, hospitals and offices', 'Residential and commercial buildings'],
        'components' => ['Sprinkler heads and pipe network', 'Alarm and control valves', 'Flow switches and test drains', 'Fire pumps and pressure gauges'],
        'deliverables' => ['Hazard assessment', 'Hydraulic calculation', 'Layout and supply', 'Installation', 'Flow testing', 'Commissioning'],
        'image' => 'assets/images/fire_sprinkler.png',
        'image_alt' => 'Automatic fire sprinkler system',
        'icon' => 'fa-spray-can-sparkles',
    ],
]);
