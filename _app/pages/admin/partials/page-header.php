<?php
declare(strict_types=1);

require_once __DIR__ . '/../../../helpers/icons.php';

$headerBadgeIcon = isset($headerBadgeIcon) ? (string) $headerBadgeIcon : 'layout-grid';
$headerBadgeText = isset($headerBadgeText) ? (string) $headerBadgeText : 'Módulo Admin';
$headerBadgeClass = isset($headerBadgeClass) ? (string) $headerBadgeClass : 'bg-slate-100 text-slate-700';
$headerTitle = isset($headerTitle) ? (string) $headerTitle : 'Admin';
$headerTitleIcon = isset($headerTitleIcon) ? (string) $headerTitleIcon : '';
$headerTitleIconClass = isset($headerTitleIconClass) ? (string) $headerTitleIconClass : 'h-7 w-7 text-slate-700';
$headerSubtitle = isset($headerSubtitle) ? (string) $headerSubtitle : '';
$headerSubtitleHtml = isset($headerSubtitleHtml) ? (string) $headerSubtitleHtml : '';
$headerActionsHtml = isset($headerActionsHtml) ? (string) $headerActionsHtml : '';
?>
<section class="flex flex-wrap items-start justify-between gap-4 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
  <div>
    <p class="inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-semibold <?php echo htmlspecialchars($headerBadgeClass, ENT_QUOTES, 'UTF-8'); ?>">
      <?php echo uneg_icon($headerBadgeIcon, 'h-3.5 w-3.5'); ?>
      <?php echo htmlspecialchars($headerBadgeText, ENT_QUOTES, 'UTF-8'); ?>
    </p>
    <h1 class="mt-3 flex items-center gap-2 text-3xl font-semibold text-slate-900">
      <?php if ($headerTitleIcon !== ''): ?>
        <?php echo uneg_icon($headerTitleIcon, htmlspecialchars($headerTitleIconClass, ENT_QUOTES, 'UTF-8')); ?>
      <?php endif; ?>
      <?php echo htmlspecialchars($headerTitle, ENT_QUOTES, 'UTF-8'); ?>
    </h1>
    <?php if ($headerSubtitleHtml !== ''): ?>
      <p class="mt-1 text-sm text-slate-600"><?php echo $headerSubtitleHtml; ?></p>
    <?php elseif ($headerSubtitle !== ''): ?>
      <p class="mt-1 text-sm text-slate-600"><?php echo htmlspecialchars($headerSubtitle, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>
  </div>
  <?php if ($headerActionsHtml !== ''): ?>
    <div class="flex flex-wrap items-center gap-2">
      <?php echo $headerActionsHtml; ?>
    </div>
  <?php endif; ?>
</section>
