<footer class="site-footer bg-gray-900 text-white py-8 mt-auto">
  <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
      <div class="site-info">
        <p class="text-gray-400 text-sm">
          &copy; {{ date('Y') }} {{ $siteName }}. All rights reserved.
        </p>
      </div>

      @if (has_nav_menu('footer_navigation'))
        <nav class="footer-nav" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
          {!! wp_nav_menu([
            'theme_location' => 'footer_navigation',
            'menu_class' => 'nav flex gap-4 text-sm',
            'echo' => false,
            'link_before' => '<span class="text-gray-400 hover:text-white transition">',
            'link_after' => '</span>',
          ]) !!}
        </nav>
      @endif
    </div>
  </div>
</footer>
