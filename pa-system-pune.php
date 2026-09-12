<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
render_page('service-page', [
    'title' => 'PA System Solutions in India | BESA Life Safety',
    'description' => 'BESA Life Safety provides public address and emergency communication systems across India for industrial, commercial and residential projects.',
    'keywords' => 'PA system Pune, public address system company Pune, emergency communication system Pune, PA system installation Pune, industrial PA system Pune',
    'active_nav' => 'pa-system',
    'service' => [
        'title' => 'PA System Solutions Across India',
        'intro' => 'Clear, dependable public address and emergency communication systems for everyday announcements and critical situations.',
        'heading' => 'Public Address and Emergency Communication',
        'content' => 'We design, supply, install, test and commission PA systems that deliver intelligible voice communication across buildings, campuses and industrial facilities.',
        'work' => 'We conduct a site survey and deliver a complete zone-wise PA setup with speakers, amplifiers, microphones and rack systems for everyday and emergency announcements. After installation, we test clarity and audibility in every zone.',
        'features' => ['Zone-wise paging and announcements', 'Emergency evacuation instructions', 'Background music and general announcements', 'System testing, commissioning and AMC support'],
        'process' => ['Site survey and audio requirement assessment', 'System design, equipment selection and quotation', 'Installation, cabling, programming and zone testing', 'Client handover, training and AMC support'],
        'why' => 'During an emergency, clear instructions must reach every person. BESA PA systems focus on practical design, intelligible sound and reliable long-term support.',
        'facts' => [
            ['icon' => 'fa-volume-high', 'title' => 'Clear Audio', 'text' => 'Intelligible voice coverage'],
            ['icon' => 'fa-layer-group', 'title' => 'Zone Control', 'text' => 'Independent paging zones'],
            ['icon' => 'fa-bullhorn', 'title' => 'Emergency Ready', 'text' => 'Fast evacuation announcements'],
        ],
        'applications' => ['Factories and warehouses', 'Schools, hospitals and hotels', 'Residential and commercial buildings', 'Campuses, offices and public areas'],
        'components' => ['PA speakers and horn speakers', 'Amplifiers, microphones and mixers', 'Rack, cabling and zone selectors', 'Emergency tone and announcement integration'],
        'deliverables' => ['System design', 'Supply', 'Installation', 'Testing & commissioning', 'Training', 'AMC'],
        'image' => 'assets/images/public_address.png',
        'image_alt' => 'Public address system installation',
        'icon' => 'fa-bullhorn',
    ],
]);
