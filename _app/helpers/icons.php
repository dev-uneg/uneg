<?php
declare(strict_types=1);

if (!function_exists('uneg_icon')) {
  function uneg_icon(string $name, string $class = 'h-4 w-4', bool $decorative = true): string
  {
    $icons = [
      'menu' => 'ri-menu-line',
      'check' => 'ri-check-line',
      'filter' => 'ri-filter-3-line',
      'download' => 'ri-download-line',
      'layout-grid' => 'ri-layout-grid-line',
      'log-out' => 'ri-logout-box-r-line',
      'trash-2' => 'ri-delete-bin-line',
      'chevron-down' => 'ri-arrow-down-s-line',
      'eye' => 'ri-eye-line',
      'users' => 'ri-team-line',
      'graduation-cap' => 'ri-graduation-cap-line',
      'mailbox' => 'ri-mail-line',
      'shield-check' => 'ri-shield-check-fill',
      'key-round' => 'ri-key-2-line',
      'facebook' => 'ri-facebook-fill',
      'instagram' => 'ri-instagram-fill',
      'youtube' => 'ri-youtube-fill',
      'linkedin' => 'ri-linkedin-fill',
      'twitter-x' => 'ri-twitter-x-fill',
      'whatsapp' => 'ri-whatsapp-fill',
    ];

    if (!isset($icons[$name])) {
      return '';
    }

    $safeClass = htmlspecialchars($class, ENT_QUOTES, 'UTF-8');
    $iconClass = htmlspecialchars($icons[$name], ENT_QUOTES, 'UTF-8');
    $ariaHidden = $decorative ? ' aria-hidden="true"' : '';
    $fontSizeRem = null;

    $tokens = preg_split('/\s+/', trim($class)) ?: [];
    foreach ($tokens as $token) {
      if (preg_match('/^h-(\d+(?:\.\d+)?)$/', $token, $matches) === 1) {
        $fontSizeRem = ((float) $matches[1]) * 0.25;
        break;
      }
    }
    if ($fontSizeRem === null) {
      foreach ($tokens as $token) {
        if (preg_match('/^w-(\d+(?:\.\d+)?)$/', $token, $matches) === 1) {
          $fontSizeRem = ((float) $matches[1]) * 0.25;
          break;
        }
      }
    }
    $style = $fontSizeRem !== null
      ? ' style="font-size:' . rtrim(rtrim((string) $fontSizeRem, '0'), '.') . 'rem;line-height:1;"'
      : ' style="line-height:1;"';

    return '<i class="' . $iconClass . ' ' . $safeClass . '"' . $ariaHidden . $style . '></i>';
  }
}
