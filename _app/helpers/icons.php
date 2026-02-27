<?php
declare(strict_types=1);

if (!function_exists('uneg_icon')) {
  function uneg_icon(string $name, string $class = 'h-4 w-4', bool $decorative = true): string
  {
    $icons = [
      'menu' => 'menu',
      'check' => 'check',
      'filter' => 'filter',
      'download' => 'download',
      'layout-grid' => 'layout-grid',
      'log-out' => 'log-out',
      'trash-2' => 'trash-2',
      'chevron-down' => 'chevron-down',
      'eye' => 'eye',
      'users' => 'users',
      'graduation-cap' => 'graduation-cap',
      'mailbox' => 'mail',
      'shield-check' => 'check-circle',
      'key-round' => 'key-round',
      'facebook' => 'facebook',
      'instagram' => 'instagram',
      'youtube' => 'youtube',
      'linkedin' => 'linkedin',
      'twitter-x' => 'twitter',
      'whatsapp' => 'whatsapp',
    ];

    if (!isset($icons[$name])) {
      return '';
    }

    $safeClass = htmlspecialchars($class, ENT_QUOTES, 'UTF-8');
    $iconName = htmlspecialchars($icons[$name], ENT_QUOTES, 'UTF-8');
    $ariaHidden = $decorative ? ' aria-hidden="true"' : '';

    if ($name === 'whatsapp') {
      static $whatsappSvg = null;
      if ($whatsappSvg === null) {
        $svgPath = __DIR__ . '/../../_assets/svg/whatsapp.svg';
        $whatsappSvg = is_file($svgPath) ? (string) file_get_contents($svgPath) : '';
      }
      if ($whatsappSvg !== '') {
        $svgAttrs = ' class="' . $safeClass . '"' . $ariaHidden . ' focusable="false"';
        return preg_replace('/<svg\\b/i', '<svg' . $svgAttrs, $whatsappSvg, 1) ?: '';
      }
      return '<i class="' . $safeClass . '" data-lucide="message-circle"' . $ariaHidden . '></i>';
    }

    return '<i class="' . $safeClass . '" data-lucide="' . $iconName . '"' . $ariaHidden . '></i>';
  }
}
