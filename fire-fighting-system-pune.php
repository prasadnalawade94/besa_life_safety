<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
render_page('service-page', [
    'title' => 'Fire Fighting System Company in India | BESA Life Safety',
    'description' => 'BESA Life Safety provides complete fire fighting system design, supply, installation, testing and commissioning across India.',
    'keywords' => 'fire fighting system company Pune, fire fighting contractor Pune, fire protection system Pune, fire fighting installation Pune, fire suppression system Pune',
    'active_nav' => 'fire-fighting-system',
    'service' => [
        'title' => 'Fire Fighting System Solutions Across India',
        'intro' => 'Complete active fire protection systems for industrial, commercial and residential buildings.',
        'heading' => 'Integrated Fire Fighting Solutions',
        'content' => 'We provide coordinated fire fighting solutions with practical engineering, quality equipment and professional installation for dependable emergency response.',
        'work' => 'We coordinate the fire water tank, pump room, piping network, hydrants, sprinklers and valves to deliver a complete fire fighting system. Our team manages both hydraulic requirements and site execution.',
        'features' => ['Fire hydrant and wet riser systems', 'Automatic sprinkler systems', 'Fire pump room and pump systems', 'Piping, valves, testing and commissioning'],
        'process' => ['Project drawings and water demand assessment', 'Hydraulic planning and equipment selection', 'Piping, pump room and firefighting equipment installation', 'Pressure testing, flow testing and commissioning'],
        'why' => 'Every component in a fire fighting system must work together correctly. BESA coordinates the complete journey from design to commissioning through one technical team.',
        'facts' => [
            ['icon' => 'fa-fire-flame-curved', 'title' => 'Active Protection', 'text' => 'Built for emergency response'],
            ['icon' => 'fa-gears', 'title' => 'System Integration', 'text' => 'Pumps, piping and devices'],
            ['icon' => 'fa-gauge-high', 'title' => 'Tested Performance', 'text' => 'Pressure and flow verified'],
        ],
        'applications' => ['Factories and manufacturing plants', 'IT parks, malls and offices', 'Warehouses and logistics facilities', 'Residential and mixed-use projects'],
        'components' => ['Fire water tanks and pump rooms', 'Hydrant, wet riser and sprinkler networks', 'Pumps, valves and pressure equipment', 'Fire brigade inlets and hose reels'],
        'deliverables' => ['Hydraulic planning', 'Equipment supply', 'Piping installation', 'Pressure testing', 'Commissioning', 'Maintenance'],
        'image' => 'assets/images/fire_hydrant.png',
        'image_alt' => 'Fire fighting hydrant system',
        'icon' => 'fa-fire-flame-curved',
    ],
]);
