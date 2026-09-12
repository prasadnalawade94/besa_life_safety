<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
render_page('service-page', [
    'title' => 'Fire Safety Audit Company in India | BESA Life Safety',
    'description' => 'BESA Life Safety provides professional fire safety audits across India with risk assessment, compliance review and practical corrective recommendations.',
    'keywords' => 'fire safety audit Pune, fire audit company Pune, fire risk assessment Pune, fire safety compliance audit Pune, industrial fire audit Pune',
    'active_nav' => 'fire-safety-audit',
    'service' => [
        'title' => 'Fire Safety Audit Services Across India',
        'intro' => 'Professional fire safety audits that identify risks, review systems and help your facility improve compliance and emergency readiness.',
        'heading' => 'Complete Fire Safety Audit and Risk Assessment',
        'content' => 'Our audit team reviews your building, fire protection systems, emergency arrangements and maintenance records to identify gaps and provide a practical action plan.',
        'work' => 'We inspect the site layout, escape routes, fire alarm, hydrant, sprinkler, fire extinguishers, emergency lighting, electrical risks and safety procedures. The audit findings are documented with priorities and clear corrective recommendations.',
        'features' => ['Building and fire risk assessment', 'Inspection of fire protection systems', 'Emergency exit and evacuation review', 'Compliance gaps and corrective action plan'],
        'process' => ['Site visit, document review and stakeholder discussion', 'Inspection of fire and life safety installations', 'Risk classification and gap assessment', 'Detailed audit report with priority-based recommendations'],
        'why' => 'A professional audit helps uncover risks before an incident occurs. BESA combines field inspection with practical fire system knowledge so your team receives clear, actionable recommendations.',
        'facts' => [
            ['icon' => 'fa-magnifying-glass-chart', 'title' => 'Risk Identification', 'text' => 'Find hazards before incidents'],
            ['icon' => 'fa-clipboard-check', 'title' => 'System Review', 'text' => 'Inspect protection systems'],
            ['icon' => 'fa-file-circle-check', 'title' => 'Action Report', 'text' => 'Prioritised recommendations'],
        ],
        'applications' => ['Factories and industrial facilities', 'Commercial buildings, malls and offices', 'Hospitals, hotels and educational campuses', 'Residential societies and high-rise buildings'],
        'components' => ['Fire alarm and detection systems', 'Hydrant, sprinkler and pump systems', 'Emergency exits, lighting and signage', 'Fire safety records and emergency procedures'],
        'deliverables' => ['Site inspection', 'Risk register', 'System observations', 'Compliance gap report', 'Corrective action plan', 'Audit report'],
        'image' => 'assets/images/fire_audit.png',
        'image_alt' => 'Fire safety audit inspection',
        'icon' => 'fa-clipboard-check',
    ],
]);
