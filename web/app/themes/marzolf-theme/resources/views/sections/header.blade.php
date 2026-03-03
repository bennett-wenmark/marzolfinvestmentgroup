<header class="site-header fixed top-2 sm:top-4 left-1/2 -translate-x-1/2 z-50 w-[calc(100%-1rem)] sm:w-[calc(100%-2rem)] max-w-6xl transition-all duration-500" id="site-header">
  <div class="header-inner flex justify-between items-center px-3 sm:px-6 py-2 sm:py-3 rounded-full transition-all duration-500 bg-white/10 backdrop-blur-xl border border-white/20 shadow-lg">
    <a class="site-logo flex items-center no-underline group" href="{{ home_url('/') }}" style="text-decoration: none !important;">
      <img src="{{ get_theme_file_uri('resources/images/logo_marzolf-investment-group.svg') }}" alt="{{ $siteName }}" class="w-auto transition-transform duration-300 group-hover:scale-105" style="filter: brightness(0) invert(1); height: calc(var(--spacing) * 12); @media (min-width: 640px) { height: calc(var(--spacing) * 16); }">
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="main-nav hidden md:flex items-center gap-1" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav flex items-center gap-1',
          'echo' => false,
          'link_before' => '<span class="nav-link relative px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm font-medium transition-all duration-300 no-underline" style="color: rgba(255,255,255,0.9); text-decoration: none !important;">',
          'link_after' => '</span>',
        ]) !!}
      </nav>
    @endif
    
    {{-- Mobile Menu Button --}}
    <button class="md:hidden p-2 rounded-full bg-white/10 mobile-menu-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
      <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white menu-icon-open" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
      <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white menu-icon-close hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </div>
</header>

{{-- Mobile Menu Overlay --}}
<div id="mobile-menu" class="mobile-menu fixed inset-0 z-40 hidden" aria-hidden="true">
  {{-- Backdrop --}}
  <div class="mobile-menu-backdrop absolute inset-0 bg-black/60 backdrop-blur-sm" aria-hidden="true"></div>
  
  {{-- Menu Panel --}}
  <div class="mobile-menu-panel absolute right-0 top-0 bottom-0 w-4/5 max-w-sm bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-out">
    <div class="flex flex-col h-full">
      {{-- Close Button --}}
      <div class="flex justify-end p-4">
        <button class="mobile-menu-close p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition" aria-label="Close menu">
          <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
      
      {{-- Menu Items --}}
      <nav class="flex-1 px-6 py-4" aria-label="Mobile Navigation">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'flex flex-col gap-2',
          'echo' => false,
          'link_before' => '<span class="block px-4 py-3 rounded-xl text-lg font-medium transition-all duration-200 hover:bg-gray-100" style="color: var(--color-neutral-800); text-decoration: none !important;">',
          'link_after' => '</span>',
        ]) !!}
      </nav>
      
      {{-- CTA at bottom --}}
      <div class="p-6 border-t border-gray-100">
        <a href="{{ home_url('/') }}#contact" class="mobile-menu-cta block w-full text-center px-6 py-4 rounded-xl font-semibold text-white transition no-underline text-lg" style="background: var(--color-primary); text-decoration: none !important;">
          Schedule a Consultation
        </a>
      </div>
    </div>
  </div>
</div>

<style>
  /* Force remove underlines from all nav links - override WordPress global styles */
  .main-nav a,
  .main-nav a span,
  .nav-link,
  #site-header .nav-link,
  .menu-primary-navigation a,
  #menu-primary-navigation a,
  #menu-primary-navigation a span,
  .menu-item a,
  .current-menu-item a,
  #mobile-menu a {
    text-decoration: none !important;
    border-bottom: none !important;
    box-shadow: none !important;
    background-image: none !important;
  }
  
  /* Override WordPress a:where(:not(.wp-element-button)) specifically */
  body .main-nav a:where(:not(.wp-element-button)),
  body #site-header a:where(:not(.wp-element-button)),
  body #mobile-menu a:where(:not(.wp-element-button)) {
    text-decoration: none !important;
  }
  
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
    top: 0.5rem;
  }
  
  @media (min-width: 640px) {
    .site-header.scrolled {
      top: 1rem;
    }
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
  
  /* Mobile Menu States */
  .mobile-menu.open {
    display: block;
  }
  
  .mobile-menu.open .mobile-menu-panel {
    transform: translateX(0);
  }
  
  /* Prevent body scroll when menu open */
  body.menu-open {
    overflow: hidden;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('site-header');
    const hero = document.querySelector('.hero');
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.querySelector('.mobile-menu-close');
    const mobileMenuBackdrop = document.querySelector('.mobile-menu-backdrop');
    const menuIconOpen = document.querySelector('.menu-icon-open');
    const menuIconClose = document.querySelector('.menu-icon-close');
    
    // Mobile menu functions
    function openMobileMenu() {
      mobileMenu.classList.remove('hidden');
      // Small delay to allow display:block to apply before adding transform
      setTimeout(() => {
        mobileMenu.classList.add('open');
      }, 10);
      document.body.classList.add('menu-open');
      mobileMenuToggle.setAttribute('aria-expanded', 'true');
      mobileMenu.setAttribute('aria-hidden', 'false');
      menuIconOpen.classList.add('hidden');
      menuIconClose.classList.remove('hidden');
    }
    
    function closeMobileMenu() {
      mobileMenu.classList.remove('open');
      document.body.classList.remove('menu-open');
      mobileMenuToggle.setAttribute('aria-expanded', 'false');
      mobileMenu.setAttribute('aria-hidden', 'true');
      menuIconOpen.classList.remove('hidden');
      menuIconClose.classList.add('hidden');
      // Wait for transition to finish before hiding
      setTimeout(() => {
        if (!mobileMenu.classList.contains('open')) {
          mobileMenu.classList.add('hidden');
        }
      }, 300);
    }
    
    // Toggle button
    if (mobileMenuToggle) {
      mobileMenuToggle.addEventListener('click', () => {
        if (mobileMenu.classList.contains('open')) {
          closeMobileMenu();
        } else {
          openMobileMenu();
        }
      });
    }
    
    // Close button
    if (mobileMenuClose) {
      mobileMenuClose.addEventListener('click', closeMobileMenu);
    }
    
    // Close on backdrop click
    if (mobileMenuBackdrop) {
      mobileMenuBackdrop.addEventListener('click', closeMobileMenu);
    }
    
    // Close on escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
        closeMobileMenu();
      }
    });
    
    // Close menu when clicking a link
    const mobileMenuLinks = mobileMenu.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', () => {
        closeMobileMenu();
      });
    });
    
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
    
    // Smooth scroll for nav links - handle both hash-only and full URLs
    document.querySelectorAll('a').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (!href || href === '#') return;
        
        // Parse the URL
        const linkUrl = new URL(href, window.location.origin);
        const currentUrl = new URL(window.location.href);
        
        // Check if this is a same-page hash link
        const isSamePage = linkUrl.hostname === currentUrl.hostname && 
                           linkUrl.pathname === currentUrl.pathname &&
                           linkUrl.hash;
        
        if (isSamePage) {
          e.preventDefault();
          const targetId = linkUrl.hash;
          const targetElement = document.querySelector(targetId);
          
          if (targetElement) {
            // Get the target's position relative to the document
            const headerHeight = document.getElementById('site-header').offsetHeight + 20; // Header + buffer
            const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;
            
            // Smooth scroll to target
            window.scrollTo({
              top: targetPosition,
              behavior: 'smooth'
            });
          }
        }
        // If different page, let browser handle normally (full page load + scroll to hash)
      });
    });
  });
</script>
