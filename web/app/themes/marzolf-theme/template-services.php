{{--
Template Name: Services Overview
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <article class="services-overview-page">
      
      {{-- Hero Header --}}
      <section class="services-hero relative py-24 md:py-32 overflow-hidden" style="background: linear-gradient(135deg, #1a3d14 0%, #206d13 50%, #1a5a10 100%);">
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="container-modern relative z-10">
          <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
              Our Services
            </h1>
            <p class="text-xl md:text-2xl text-green-100 leading-relaxed">
              Comprehensive financial planning tailored to your unique circumstances and goals.
            </p>
          </div>
        </div>
        
        {{-- Decorative Wave --}}
        <div class="absolute bottom-0 left-0 right-0">
          <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#fafaf9"/>
          </svg>
        </div>
      </section>

      {{-- Intro Section --}}
      <section class="services-intro py-16 md:py-20" style="background: #fafaf9;">
        <div class="container-modern">
          <div class="max-w-3xl mx-auto">
            <div class="prose prose-lg max-w-none text-center">
              <p class="text-xl" style="color: var(--color-neutral-700);">
                At Marzolf Investment Group, we offer a comprehensive suite of financial planning services designed to help you navigate every stage of your financial journey. From building wealth during your working years to creating a sustainable retirement income, from protecting your family with proper insurance coverage to leaving a meaningful legacy for future generations—we are here to guide you every step of the way.
              </p>
              <p style="color: var(--color-neutral-600);">
                Our approach combines time-tested investment principles with personalized strategies tailored to your unique situation. We take the time to understand your goals, values, and concerns before recommending any course of action. Whether you are just starting to build your nest egg, preparing for retirement, or planning to transfer wealth to the next generation, we have the expertise and experience to help you succeed.
              </p>
            </div>
          </div>
        </div>
      </section>

      {{-- Services Grid Section --}}
      <section class="services-grid section-padding bg-white">
        <div class="container-modern">
          <div class="text-center mb-16">
            <span class="inline-block text-sm font-semibold tracking-wider uppercase mb-3" style="color: var(--color-primary);">What We Offer</span>
            <h2 class="text-3xl md:text-4xl font-bold" style="color: var(--color-neutral-900);">Explore Our Services</h2>
          </div>
          
          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            {{-- Service 1 --}}
            <a href="{{ get_permalink(21) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
              <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">Wealth Management</h3>
              <p style="color: var(--color-neutral-600);">Individual wealth management strategies designed to grow and protect your assets.</p>
            </a>
            
            {{-- Service 2 --}}
            <a href="{{ get_permalink(22) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
              <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
              </div>
              <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">Retirement Planning</h3>
              <p style="color: var(--color-neutral-600);">Retirement income planning to ensure financial security in your golden years.</p>
            </a>
            
            {{-- Service 3 --}}
            <a href="{{ get_permalink(23) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
              <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
              </div>
              <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">Tax-Advantaged Legacy</h3>
              <p style="color: var(--color-neutral-600);">Generational and charitable gifting strategies that minimize tax impact.</p>
            </a>
            
            {{-- Service 4 --}}
            <a href="{{ get_permalink(24) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
              <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
              </div>
              <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">Insurance Planning</h3>
              <p style="color: var(--color-neutral-600);">Life, disability, and long-term care insurance planning for complete protection.</p>
            </a>
            
            {{-- Service 5 --}}
            <a href="{{ get_permalink(25) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
              <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                </svg>
              </div>
              <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">College Planning</h3>
              <p style="color: var(--color-neutral-600);">Education funding strategies to help prepare for your children's future.</p>
            </a>
            
            {{-- Service 6 --}}
            <a href="{{ get_permalink(26) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
              <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
              </div>
              <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">Team Approach</h3>
              <p style="color: var(--color-neutral-600);">Coordination with your CPA, attorney, and other professionals for holistic planning.</p>
            </a>
          </div>
        </div>
      </section>
      
      {{-- CTA Section --}}
      <section class="cta-section py-16" style="background: linear-gradient(135deg, #1a3d14 0%, #206d13 50%, #1a5a10 100%);">
        <div class="container-modern text-center">
          <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Get Started?</h2>
          <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
            Contact us today to learn more about how our services can help you achieve your financial goals.
          </p>
          <a href="http://marzolfinvestmentgroup.test/#contact" class="btn-primary bg-white text-green-800 hover:bg-green-50 no-underline" style="text-decoration: none;">
            Schedule a Consultation
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </section>
      
    </article>
  @endwhile
@endsection