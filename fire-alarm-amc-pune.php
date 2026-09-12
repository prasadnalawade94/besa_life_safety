<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
render_page('service-page', [
    'title' => 'AMC & Maintenance Services Across India | BESA Life Safety',
    'description' => 'BESA Life Safety provides AMC and maintenance for fire alarm, fire fighting, hydrant, sprinkler, fire pump and PA systems across India.',
    'keywords' => 'fire alarm AMC company in Pune, fire alarm maintenance Pune, fire fighting system AMC Pune, fire sprinkler AMC Pune, fire hydrant maintenance Pune, PA system AMC Pune',
    'active_nav' => 'amc',
    'service' => [
        'title' => 'AMC & Maintenance Services Across India',
        'intro' => 'One maintenance partner for fire alarm, fire fighting, hydrant, sprinkler, fire pump and PA systems.',
        'heading' => 'Annual Maintenance Contracts for Fire & Life Safety Systems',
        'content' => 'Our AMC service includes scheduled inspections, functional testing, troubleshooting, corrective maintenance and reporting to keep your fire and life safety systems operational and ready for an emergency.',
        'work' => 'We maintain fire alarm panels, detectors, MCPs, sounders, batteries, hydrant piping, sprinkler valves, fire pumps and PA equipment. Our visits include cleaning, functional testing, fault finding, battery checks, pressure checks and documented service reports.',
        'features' => ['Fire alarm inspection and device testing', 'Fire fighting, hydrant and sprinkler maintenance', 'Fire pump inspection and performance checks', 'PA system testing and emergency communication support'],
        'process' => ['Existing system audit and AMC scope finalisation', 'Scheduled preventive inspection and device testing', 'Fault diagnosis, replacement and corrective work', 'Service report, recommendations and follow-up visit'],
        'why' => 'An untested fire alarm system may fail during an emergency. BESA AMC maintains system readiness through preventive checks, documented testing and timely corrective support.',
        'facts' => [
            ['icon' => 'fa-calendar-check', 'title' => 'Scheduled Visits', 'text' => 'Planned preventive maintenance'],
            ['icon' => 'fa-screwdriver-wrench', 'title' => 'Fast Troubleshooting', 'text' => 'Fault diagnosis and repair'],
            ['icon' => 'fa-file-lines', 'title' => 'Service Records', 'text' => 'Reports and recommendations'],
        ],
        'scope_groups' => [
            ['icon' => 'fa-bell', 'title' => 'Fire Alarm System', 'items' => ['Addressable Fire Alarm', 'Conventional Fire Alarm', 'Fire Alarm Installation', 'Fire Alarm AMC']],
            ['icon' => 'fa-fire-flame-curved', 'title' => 'Fire Fighting System', 'items' => ['Fire Hydrant System', 'Fire Sprinkler System', 'Fire Pump System']],
            ['icon' => 'fa-bullhorn', 'title' => 'PA System', 'items' => ['Public address equipment', 'Zone-wise announcements', 'Emergency evacuation communication']],
        ],
        'licenses' => ['Fire Fighting and Sprinkler System', 'Detection and Fire Suppression System', 'Passive Fire Protection System'],
        'applications' => ['Existing addressable fire alarm systems', 'Conventional fire alarm installations', 'Factories, offices and warehouses', 'Hospitals, hotels and residential societies'],
        'components' => ['Panel, battery and power supply checks', 'Detector and manual call point testing', 'Sounder, beacon and interface testing', 'Fault rectification and replacement support'],
        'deliverables' => ['Initial system audit', 'Preventive visits', 'Functional testing', 'Fault reports', 'Corrective maintenance', 'AMC documentation'],
        'image' => 'assets/amc_maintenance.png',
        'image_alt' => 'Fire alarm maintenance service',
        'icon' => 'fa-screwdriver-wrench',
    ],
]);
