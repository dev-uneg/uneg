<style>
  .marquee {
    overflow: hidden;
    white-space: nowrap;
  }
  .marquee__inner {
    display: inline-flex;
    width: max-content;
    animation: marquee 22s linear infinite;
  }
  .marquee__track {
    display: inline-flex;
    align-items: center;
    gap: 0;
    padding-right: 2rem;
  }
  .marquee:hover .marquee__inner,
  .marquee:focus-within .marquee__inner {
    animation-play-state: paused;
  }
  @keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
</style>
<div class="bg-[#0d4fb6] text-white text-sm">
  <div class="max-w-7xl mx-auto px-4 py-2 overflow-hidden">
    <div class="marquee">
      <div class="marquee__inner">
        <div class="marquee__track">
          <span>Admisiones: (55) 50631300 - Opción 1</span>
          <span class="mx-6">•</span>
          <span>Trámites Académicos: 55 5063 1300</span>
          <span class="mx-6">•</span>
          <span>Whats App: 55 7113 7882</span>
          <span class="mx-6">•</span>
          <span>Crédito y Cobranza WhatsApp: 55 1700 9348 / 56 6747 7007</span>
          <span class="mx-6">•</span>
          <span class="inline-flex items-center gap-3">
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="Facebook" href="https://www.facebook.com/unegoficial/"><?php echo uneg_icon('facebook', 'h-4 w-4'); ?></a>
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="Instagram" href="https://www.instagram.com/unegoficial/"><?php echo uneg_icon('instagram', 'h-4 w-4'); ?></a>
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="YouTube" href="https://youtube.com/c/UniversidaddeNegociosISEC"><?php echo uneg_icon('youtube', 'h-4 w-4'); ?></a>
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="LinkedIn" href="https://www.linkedin.com/edu/school?id=15221&trk=edu-up-nav-menu-home"><?php echo uneg_icon('linkedin', 'h-4 w-4'); ?></a>
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="Twitter" href="https://twitter.com/uneg_edu"><?php echo uneg_icon('twitter-x', 'h-4 w-4'); ?></a>
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="WhatsApp" href="https://wa.me/5215571137882"><?php echo uneg_icon('whatsapp', 'h-4 w-4'); ?></a>
          </span>
        </div>
        <div class="marquee__track" aria-hidden="true">
          <span>Admisiones: (55) 50631300 - Opción 1</span>
          <span class="mx-6">•</span>
          <span>Trámites Académicos: 55 5063 1300</span>
          <span class="mx-6">•</span>
          <span>Whats App: 55 7113 7882</span>
          <span class="mx-6">•</span>
          <span>Crédito y Cobranza WhatsApp: 55 1700 9348 / 56 6747 7007</span>
          <span class="mx-6">•</span>
          <span class="inline-flex items-center gap-3">
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="Facebook" href="https://www.facebook.com/unegoficial/"><?php echo uneg_icon('facebook', 'h-4 w-4'); ?></a>
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="Instagram" href="https://www.instagram.com/unegoficial/"><?php echo uneg_icon('instagram', 'h-4 w-4'); ?></a>
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="YouTube" href="https://youtube.com/c/UniversidaddeNegociosISEC"><?php echo uneg_icon('youtube', 'h-4 w-4'); ?></a>
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="LinkedIn" href="https://www.linkedin.com/edu/school?id=15221&trk=edu-up-nav-menu-home"><?php echo uneg_icon('linkedin', 'h-4 w-4'); ?></a>
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="Twitter" href="https://twitter.com/uneg_edu"><?php echo uneg_icon('twitter-x', 'h-4 w-4'); ?></a>
            <a class="h-8 w-8 rounded-full bg-white text-[#0d4fb6] inline-flex items-center justify-center" aria-label="WhatsApp" href="https://wa.me/5215571137882"><?php echo uneg_icon('whatsapp', 'h-4 w-4'); ?></a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
