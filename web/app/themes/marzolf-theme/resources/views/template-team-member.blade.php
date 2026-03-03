@php
/*
Template Name: Team Member
*/
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <article class="team-member-page">
      
      {{-- Hero Header with Gradient --}}
      <section class="team-hero-hero relative py-24 md:py-32 overflow-hidden" style="background: linear-gradient(135deg, #1a3d14 0%, #206d13 50%, #1a5a10 100%);">
        <div class="container mx-auto px-4">
          <div class="max-w-3xl mx-auto text-center">
            <a href="{{ home_url('/') }}#team" class="inline-flex items-center text-green-200 hover:text-white mb-6 transition no-underline">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
              </svg>
              Back to Our Team
            </a>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-2">
              {{ get_the_title() }}
            </h1>
            @if ($title = get_post_meta(get_the_ID(), 'team_title', true))
              <p class="text-xl text-green-100">{{ $title }}</p>
            @endif
          </div>
        </div>
        
        {{-- Decorative Wave --}}
        <div class="absolute bottom-0 left-0 right-0 h-24 pointer-events-none" style="transform: translateY(30%);">
          <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full" preserveAspectRatio="none">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#fafaf9"/>
          </svg>
        </div>
      </section>

      {{-- Content Section --}}
      <section class="team-content py-12" style="background: #fafaf9;">
        <div class="container mx-auto px-4">
          <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row gap-8 items-start">
              {{-- Photo --}}
              <div class="w-full md:w-1/3">
                @if ($photo = get_post_meta(get_the_ID(), 'team_photo', true))
                  <img src="{{ $photo }}" alt="{{ get_the_title() }}" class="w-full rounded-2xl shadow-lg">
                @else
                  <div class="aspect-[2/3] bg-gray-200 rounded-2xl flex items-center justify-center">
                    <span class="text-gray-400 text-6xl">{{ substr(get_the_title(), 0, 1) }}</span>
                  </div>
                @endif
              </div>
              
              {{-- Info --}}
              <div class="w-full md:w-2/3">
                <div class="prose prose-lg max-w-none text-gray-700 entry-content">
                  @php(the_content())
                </div>
                
                @if ($email = get_post_meta(get_the_ID(), 'team_email', true))
                  <div class="mt-8">
                    <a href="mailto:{{ $email }}" class="inline-flex items-center text-white px-6 py-3 rounded-lg transition no-underline" style="background: var(--color-primary);" onmouseover="this.style.background='var(--color-primary-dark)'" onmouseout="this.style.background='var(--color-primary)'">
                      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                      </svg>
                      Contact {{ strtok(get_the_title(), ' ') }}
                    </a>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </section>
      
    </article>
  @endwhile
@endsection