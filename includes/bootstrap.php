<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_set_cookie_params([
        'httponly' => true,
        'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
        'samesite' => 'Lax',
    ]);
    session_start();
}

function quote_csrf_token(): string
{
    if (empty($_SESSION['quote_csrf'])) {
        $_SESSION['quote_csrf'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['quote_csrf'];
}

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

    if (!isset($_POST['quote_csrf']) || !hash_equals((string) ($_SESSION['quote_csrf'] ?? ''), (string) $_POST['quote_csrf'])) {
        return 'Your form session expired. Please refresh the page and try again.';
    }

    $attachment = $_FILES['attachment'] ?? null;
    $attachment_data = null;
    $max_attachment_size = 10 * 1024 * 1024;
    $allowed_types = [
        'application/pdf' => ['pdf'],
        'image/jpeg' => ['jpg', 'jpeg'],
        'image/png' => ['png'],
        'application/msword' => ['doc'],
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => ['docx'],
    ];

    if ($name === '' || $phone === '' || $requirement === '' || strlen($name) > 120 || strlen($phone) > 40 || strlen($requirement) > 5000 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Please fill in all fields with valid details.';
    }

    if (is_array($attachment) && ($attachment['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_NO_FILE) {
        if (($attachment['error'] ?? UPLOAD_ERR_OK) !== UPLOAD_ERR_OK) {
            return 'The attachment could not be uploaded. Please try again.';
        }
        if (($attachment['size'] ?? 0) > $max_attachment_size || !is_uploaded_file($attachment['tmp_name'] ?? '')) {
            return 'Please attach a file smaller than 10 MB.';
        }

        $mime = (new finfo(FILEINFO_MIME_TYPE))->file($attachment['tmp_name']);
        $extension = strtolower(pathinfo((string) $attachment['name'], PATHINFO_EXTENSION));
        if ($mime === false || !isset($allowed_types[$mime]) || !in_array($extension, $allowed_types[$mime], true)) {
            return 'Allowed attachments: PDF, JPG, PNG, DOC or DOCX files up to 10 MB.';
        }

        $file_content = file_get_contents($attachment['tmp_name']);
        if ($file_content === false) {
            return 'The attachment could not be read. Please try again.';
        }

        $safe_filename = preg_replace('/[^A-Za-z0-9._-]/', '_', basename((string) $attachment['name'])) ?: 'attachment';
        $attachment_data = [
            'name' => $safe_filename,
            'type' => $mime,
            'content' => $file_content,
        ];
    }

    $safe_subject_name = trim(str_replace(["\r", "\n"], '', $name));
    $subject = 'New Quote Request from ' . $safe_subject_name;
    $message = "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\n\nRequirement:\n{$requirement}";
    $headers = "From: " . ENQUIRY_EMAIL . "\r\nReply-To: {$email}\r\n";

    if ($attachment_data !== null) {
        $boundary = 'besa_' . bin2hex(random_bytes(12));
        $headers .= "MIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"{$boundary}\"";
        $encoded_file = chunk_split(base64_encode($attachment_data['content']));
        $message = "--{$boundary}\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n\r\n{$message}\r\n\r\n"
            . "--{$boundary}\r\nContent-Type: {$attachment_data['type']}; name=\"{$attachment_data['name']}\"\r\n"
            . "Content-Disposition: attachment; filename=\"{$attachment_data['name']}\"\r\n"
            . "Content-Transfer-Encoding: base64\r\n\r\n{$encoded_file}\r\n--{$boundary}--";
    } else {
        $headers .= "Content-Type: text/plain; charset=UTF-8";
    }

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
