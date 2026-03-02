<header class="site-header bg-white border-b border-gray-200">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <a class="site-logo flex items-center" href="{{ home_url('/') }}">
      <img src="{{ get_theme_file_uri('resources/images/logo_marzolf-investment-group.svg') }}" alt="{{ $siteName }}" class="h-12 w-auto">
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="main-nav" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav flex gap-6',
          'echo' => false,
          'link_before' => '<span class="text-gray-700 hover:text-blue-800 transition font-medium">',
          'link_after' => '</span>',
        ]) !!}
      </nav>
    @endif
  </div>
</header>
