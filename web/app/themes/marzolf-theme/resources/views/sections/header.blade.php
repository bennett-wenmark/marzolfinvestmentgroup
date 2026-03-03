<header class="site-header bg-white/80 backdrop-blur-md border-b border-neutral-200/50 sticky top-0 z-50 transition-all duration-300" id="site-header">
  <div class="container mx-auto px-4 py-3 flex justify-between items-center">
    <a class="site-logo flex items-center no-underline group" href="{{ home_url('/') }}">
      <img src="{{ get_theme_file_uri('resources/images/logo_marzolf-investment-group.svg') }}" alt="{{ $siteName }}" class="h-16 w-auto transition-transform duration-300 group-hover:scale-105">
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="main-nav hidden md:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav flex gap-8',
          'echo' => false,
          'link_before' => '<span class="nav-link relative font-medium transition-colors duration-300 no-underline py-2" style="color: var(--color-neutral-700);">',
          'link_after' => '<span class="nav-underline absolute bottom-0 left-0 w-full h-0.5 transform scale-x-0 transition-transform duration-300 origin-left" style="background: var(--color-primary);"></span></span>',
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

<style>
  .nav-link:hover .nav-underline,
  .nav-link:focus .nav-underline {
    transform: scaleX(1);
  }
  
  .site-header.scrolled {
    background: rgba(255, 255, 255, 0.95);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  }
</style>

<script>
  // Header scroll effect
  const header = document.getElementById('site-header');
  let lastScroll = 0;
  
  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
    
    lastScroll = currentScroll;
  });
</script>
