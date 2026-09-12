<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
render_page('legal-page', [
    'title' => 'Terms & Conditions | BESA Life Safety',
    'description' => 'Terms and Conditions for using the BESA Life Safety website and its enquiry services.',
    'legal_title' => 'Terms & Conditions',
    'legal_updated' => 'Last updated: September 2026',
    'legal_sections' => [
        ['title' => 'Website Use', 'content' => 'This website provides general information about BESA Life Safety products, services, projects and support capabilities. By using the website, you agree to use it lawfully and responsibly.'],
        ['title' => 'Product and Service Information', 'content' => 'Product descriptions, images, specifications and service information are provided for general guidance. Final product availability, technical configuration, pricing and project scope are confirmed in a formal quotation or agreement.'],
        ['title' => 'Enquiries and Quotations', 'content' => 'Submitting an enquiry does not create a contract or guarantee a quotation. Our team may contact you to clarify project requirements before preparing a proposal.'],
        ['title' => 'Intellectual Property', 'content' => 'Website content, branding, text, graphics, images and documents belong to BESA Life Safety or their respective owners. They may not be copied, reproduced or used commercially without written permission.'],
        ['title' => 'Third-Party Links', 'content' => 'The website may refer to third-party brands, services or resources. BESA Life Safety is not responsible for the availability, content or privacy practices of third-party websites.'],
        ['title' => 'Limitation of Liability', 'content' => 'Website information is provided in good faith for general use. Project decisions must be based on site assessment, approved designs, applicable standards and the formal advice provided for that project.'],
        ['title' => 'Changes to These Terms', 'content' => 'BESA Life Safety may update these Terms & Conditions when website features, services or legal requirements change. The latest version will be published on this page.'],
        ['title' => 'Contact', 'content' => 'For questions about these terms, contact BESA Life Safety at ' . SITE_EMAIL . ' or ' . SITE_PHONE . '.'],
    ],
]);
