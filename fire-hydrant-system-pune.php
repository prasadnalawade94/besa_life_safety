<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
render_page('service-page', [
    'title' => 'Fire Hydrant System Company in India | BESA Life Safety',
    'description' => 'BESA Life Safety designs and installs fire hydrant systems across India, including pumps, piping, valves, hose reels and testing.',
    'keywords' => 'fire hydrant system company in Pune, fire hydrant installation Pune, fire hydrant contractor Pune, wet riser system Pune, fire hydrant piping Pune',
    'active_nav' => 'fire-fighting-system',
    'service' => [
        'title' => 'Fire Hydrant System Solutions Across India',
        'intro' => 'Reliable hydrant infrastructure for fast manual fire response across industrial, commercial and residential properties.',
        'heading' => 'Fire Hydrant Design, Installation and Testing',
        'content' => 'From hydraulic planning to installation and commissioning, we build fire hydrant systems that support efficient fire brigade operations and site safety.',
        'work' => 'We supply and install hydrant piping, landing valves, hose reels, fire brigade inlets, hydrant cabinets, pumps and accessories. Every line is tested according to the required pressure and flow performance.',
        'features' => ['Hydrant and wet riser piping', 'Landing valves, hose reels and fire brigade inlets', 'Fire pumps and pressure testing', 'Inspection, maintenance and AMC support'],
        'process' => ['Site survey and hydrant point planning', 'Pipe sizing, routing and pump selection', 'Piping, valves, hose reels and cabinet installation', 'Hydrostatic pressure test, flow test and handover'],
        'why' => 'A hydrant system gives firefighting teams dependable water access during an emergency. BESA gives equal importance to site layout, accessibility and testing documentation.',
        'facts' => [
            ['icon' => 'fa-faucet-drip', 'title' => 'Reliable Water Access', 'text' => 'Strategic hydrant points'],
            ['icon' => 'fa-route', 'title' => 'Planned Coverage', 'text' => 'Designed for site reach'],
            ['icon' => 'fa-gauge-high', 'title' => 'Pressure Tested', 'text' => 'Flow and pressure verified'],
        ],
        'applications' => ['Industrial plants and process areas', 'Commercial buildings and malls', 'Residential towers and societies', 'Warehouses, campuses and institutions'],
        'components' => ['Hydrant and wet riser piping', 'Landing valves and hydrant cabinets', 'Hose reels and fire brigade inlets', 'Fire pumps, valves and test assemblies'],
        'deliverables' => ['Site survey', 'Hydraulic design', 'Material supply', 'Installation', 'Hydrostatic testing', 'Handover documents'],
        'image' => 'assets/images/fire_hydrant.png',
        'image_alt' => 'Fire hydrant system installation',
        'icon' => 'fa-faucet-drip',
    ],
]);
