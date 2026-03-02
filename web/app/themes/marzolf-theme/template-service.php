{{--
Template Name: Service Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <article class="service-page">
      
      {{-- Hero Header --}}
      <section class="service-hero relative py-24 md:py-32 overflow-hidden" style="background: linear-gradient(135deg, #1a3d14 0%, #206d13 50%, #1a5a10 100%);">
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="container-modern relative z-10">
          <div class="max-w-3xl mx-auto text-center">
            <a href="{{ get_permalink(27) }}" class="inline-flex items-center text-green-200 hover:text-white mb-6 transition no-underline">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
              </svg>
              All Services
            </a>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
              {{ get_the_title() }}
            </h1>
            
            @if ($subtitle = get_post_meta(get_the_ID(), 'service_subtitle', true))
              <p class="text-xl md:text-2xl text-green-100 leading-relaxed">
                {{ $subtitle }}
              </p>
            @endif
          </div>
        </div>
        
        {{-- Decorative Wave --}}
        <div class="absolute bottom-0 left-0 right-0">
          <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#fafaf9"/>
          </svg>
        </div>
      </section>

      {{-- Content Section --}}
      <section class="service-content py-16 md:py-24" style="background: #fafaf9;">
        <div class="container-modern">
          <div class="max-w-4xl mx-auto">
            <div class="prose prose-lg max-w-none entry-content bg-white rounded-2xl p-8 md:p-12 shadow-sm">
              @php(the_content())
            </div>
            
            {{-- CTA Box --}}
            <div class="mt-12 bg-white rounded-2xl p-8 md:p-10 shadow-sm border-l-4" style="border-color: var(--color-primary);">
              <h3 class="text-2xl font-bold mb-4" style="color: var(--color-neutral-900);">Ready to Get Started?</h3>
              <p class="mb-6" style="color: var(--color-neutral-600);">
                Contact us today to learn more about how our {{ strtolower(get_the_title()) }} services can help you achieve your financial goals.
              </p>
              <a href="{{ home_url('/') }}#contact" class="btn-primary no-underline">
                Schedule a Consultation
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>
      
    </article>
  @endwhile
@endsection
