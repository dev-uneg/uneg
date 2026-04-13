<?php
declare(strict_types=1);

function admin_is_async_request(): bool
{
    return isset($_GET['_async']) && (string) $_GET['_async'] === '1';
}

function admin_extract_body_html(string $html): string
{
    if (preg_match('/<body[^>]*>(.*)<\/body>/is', $html, $matches) === 1) {
        return (string) ($matches[1] ?? '');
    }

    return $html;
}
