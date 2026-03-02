<header class="site-header bg-white border-b border-neutral-200 sticky top-0 z-50">
  <div class="container mx-auto px-4 py-3 flex justify-between items-center">
    <a class="site-logo flex items-center no-underline" href="{{ home_url('/') }}">
      <img src="{{ get_theme_file_uri('resources/images/logo_marzolf-investment-group.svg') }}" alt="{{ $siteName }}" class="h-16 w-auto">
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="main-nav hidden md:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav flex gap-8 no-underline',
          'echo' => false,
          'link_before' => '<span class="font-medium transition hover:text-green-700 no-underline" style="color: var(--color-neutral-700);">',
          'link_after' => '</span>',
        ]) !!}
      </nav>
    @endif
    
    {{-- Mobile Menu Button --}}
    <button class="md:hidden p-2" aria-label="Open menu">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>
</header>
