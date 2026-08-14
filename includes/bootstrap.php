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

/** Render a page view with optional metadata overrides */
function render_page(string $view, array $overrides = []): void
{
    $pages = require __DIR__ . '/pages.php';
    $meta = array_merge($pages[$view] ?? [], $overrides);
    $meta['view'] = $view;

    $viewFile = __DIR__ . '/../views/' . $view . '.php';
    if (!is_file($viewFile)) {
        http_response_code(404);
        echo 'Page not found.';
        return;
    }

    extract($meta, EXTR_SKIP);
    require __DIR__ . '/layout.php';
}
