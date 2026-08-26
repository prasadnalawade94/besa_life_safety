<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';

/** Escape HTML output */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/** Active nav class helper */
function nav_active(string $item, string $current): string
{
    return $item === $current ? ' class="active"' : '';
}

/** Process the quote form with PHP's built-in mail function. */
function process_quote_request(): string
{
    if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST' || !isset($_POST['quote_request'])) {
        return '';
    }

    $name = trim((string) ($_POST['name'] ?? ''));
    $phone = trim((string) ($_POST['phone'] ?? ''));
    $email = trim((string) ($_POST['email'] ?? ''));
    $requirement = trim((string) ($_POST['requirement'] ?? ''));

    if ($name === '' || $phone === '' || $requirement === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Please fill in all fields with valid details.';
    }

    $subject = 'New Quote Request from ' . $name;
    $message = "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\n\nRequirement:\n{$requirement}";
    $headers = "From: " . ENQUIRY_EMAIL . "\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8";

    return mail(ENQUIRY_EMAIL, $subject, $message, $headers)
        ? 'Thank you. Your quote request has been sent successfully.'
        : 'Unable to send your request right now. Please try again or call us.';
}



/** Render a page view with optional metadata overrides */
function render_page(string $view, array $overrides = []): void
{
    $pages = require __DIR__ . '/pages.php';
    $meta = array_merge($pages[$view] ?? [], $overrides);
    $meta['view'] = $view;
    $meta['quote_status'] = process_quote_request();


    $viewFile = __DIR__ . '/../views/' . $view . '.php';
    if (!is_file($viewFile)) {
        http_response_code(404);
        echo 'Page not found.';
        return;
    }

    extract($meta, EXTR_SKIP);
    require __DIR__ . '/layout.php';
}
