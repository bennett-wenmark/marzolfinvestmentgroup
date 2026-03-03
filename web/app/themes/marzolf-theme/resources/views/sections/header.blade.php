<header class="site-header fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[calc(100%-2rem)] max-w-6xl transition-all duration-500" id="site-header">
  <div class="header-inner flex justify-between items-center px-6 py-3 rounded-full transition-all duration-500 bg-white/10 backdrop-blur-xl border border-white/20 shadow-lg">
    <a class="site-logo flex items-center no-underline group" href="{{ home_url('/') }}">
      <img src="{{ get_theme_file_uri('resources/images/logo_marzolf-investment-group.svg') }}" alt="{{ $siteName }}" class="h-24 w-auto transition-transform duration-300 group-hover:scale-105" style="filter: brightness(0) invert(1);">
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="main-nav hidden md:flex items-center gap-1" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav flex items-center gap-1',
          'echo' => false,
          'link_before' => '<span class="nav-link relative px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 no-underline" style="color: rgba(255,255,255,0.9);">',
          'link_after' => '</span>',
        ]) !!}
      </nav>
    @endif
    
    {{-- Mobile Menu Button --}}
    <button class="md:hidden p-2 rounded-full bg-white/10" aria-label="Open menu">
      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>
</header>

<style>
  /* Nav link hover/active states */
  .nav-link {
    position: relative;
    overflow: hidden;
  }
  
  .nav-link::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 9999px;
    opacity: 0;
    transform: scale(0.8);
    transition: all 0.3s ease;
  }
  
  .nav-link:hover::before,
  .nav-link:focus::before {
    opacity: 1;
    transform: scale(1);
  }
  
  /* Active state */
  .nav-link.active::before {
    opacity: 1;
    transform: scale(1);
    background: rgba(255, 255, 255, 0.25);
  }
  
  /* Scrolled state */
  .site-header.scrolled {
    top: 1rem;
  }
  
  .site-header.scrolled .header-inner {
    background: rgba(32, 109, 19, 0.95);
    border-color: rgba(255, 255, 255, 0.1);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
  }
  
  .site-header.scrolled .nav-link {
    color: rgba(255, 255, 255, 0.95) !important;
  }
  
  /* Initial transparent state - over hero */
  .site-header.initial .nav-link {
    color: rgba(255, 255, 255, 0.95) !important;
  }
  
  .site-header.initial .header-inner {
    background: rgba(255, 255, 255, 0.1);
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('site-header');
    const hero = document.querySelector('.hero');
    
    function updateHeader() {
      const scrollY = window.pageYOffset;
      const heroBottom = hero ? hero.offsetTop + hero.offsetHeight : 500;
      
      if (scrollY > 100) {
        header.classList.add('scrolled');
        header.classList.remove('initial');
      } else {
        header.classList.remove('scrolled');
        header.classList.add('initial');
      }
    }
    
    // Initial state
    header.classList.add('initial');
    
    // Set Home as active by default when at top
    const navLinks = document.querySelectorAll('.nav-link');
    if (navLinks.length > 0) {
      navLinks[0].classList.add('active');
    }
    
    // Scroll listener
    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();
    
    // Active nav highlighting based on scroll position
    const sections = ['services', 'team', 'contact'];
    
    function highlightNav() {
      const scrollPos = window.pageYOffset + 200;
      let activeSet = false;
      
      // Check if we're near the top (hero section)
      if (window.pageYOffset < 300) {
        navLinks.forEach(link => link.classList.remove('active'));
        if (navLinks[0]) navLinks[0].classList.add('active');
        activeSet = true;
      }
      
      // Check other sections
      if (!activeSet) {
        sections.forEach((sectionId, index) => {
          const section = document.getElementById(sectionId);
          if (section) {
            const top = section.offsetTop;
            const bottom = top + section.offsetHeight;
            
            if (scrollPos >= top && scrollPos < bottom) {
              navLinks.forEach(link => link.classList.remove('active'));
              if (navLinks[index + 1]) { // +1 because Home is first
                navLinks[index + 1].classList.add('active');
              }
            }
          }
        });
      }
    }
    
    window.addEventListener('scroll', highlightNav, { passive: true });
  });
</script>
