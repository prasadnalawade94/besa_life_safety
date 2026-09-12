<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
render_page('legal-page', [
    'title' => 'Privacy Policy | BESA Life Safety',
    'description' => 'Privacy Policy for BESA Life Safety website visitors and enquiry submissions.',
    'legal_title' => 'Privacy Policy',
    'legal_updated' => 'Last updated: September 2026',
    'legal_sections' => [
        ['title' => 'Information We Collect', 'content' => 'When you contact BESA Life Safety through this website, we may collect your name, phone number, email address and project requirement so that our team can respond to your enquiry.'],
        ['title' => 'How We Use Your Information', 'content' => 'We use enquiry information to respond to requests, prepare quotations, provide technical assistance and communicate about our fire and life safety products and services.'],
        ['title' => 'Information Sharing', 'content' => 'We do not sell or rent your personal information. Information may be shared with authorised team members or service partners only when required to respond to your enquiry or deliver an agreed service.'],
        ['title' => 'Data Security', 'content' => 'We take reasonable administrative and technical measures to protect information submitted through this website. However, no internet transmission can be guaranteed to be completely secure.'],
        ['title' => 'Cookies and Website Usage', 'content' => 'This website may use basic technical information to operate correctly, improve performance and understand general website usage. We do not use this website to collect sensitive personal information without your consent.'],
        ['title' => 'Your Choices', 'content' => 'You may contact us to ask about the personal information submitted through this website or to request that we update or remove it, subject to applicable legal and business record requirements.'],
        ['title' => 'Contact', 'content' => 'For privacy questions, contact BESA Life Safety at ' . SITE_EMAIL . ' or ' . SITE_PHONE . '.'],
    ],
]);
