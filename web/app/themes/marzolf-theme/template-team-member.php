@php
/*
Template Name: Team Member
*/
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <article class="team-member-page">
      
      {{-- Hero Section with Photo --}}
      <section class="team-hero bg-gray-50 py-16">
        <div class="container mx-auto px-4">
          <div class="max-w-4xl mx-auto">
            <a href="{{ home_url('/') }}" class="inline-flex items-center text-blue-700 hover:text-blue-900 mb-8 transition">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
              </svg>
              Back to Home
            </a>
            
            <div class="flex flex-col md:flex-row gap-8 items-start">
              {{-- Photo --}}
              <div class="w-full md:w-1/3">
                @if ($photo = get_post_meta(get_the_ID(), 'team_photo', true))
                  <img src="{{ $photo }}" alt="{{ get_the_title() }}" class="w-full rounded-lg shadow-lg">
                @else
                  <div class="aspect-[2/3] bg-gray-200 rounded-lg flex items-center justify-center">
                    <span class="text-gray-400 text-6xl">{{ substr(get_the_title(), 0, 1) }}</span>
                  </div>
                @endif
              </div>
              
              {{-- Info --}}
              <div class="w-full md:w-2/3">
                <h1 class="text-4xl font-bold text-gray-900 mb-2">{{ get_the_title() }}</h1>
                @if ($title = get_post_meta(get_the_ID(), 'team_title', true))
                  <p class="text-xl text-blue-700 font-medium mb-6">{{ $title }}</p>
                @endif
                
                <div class="prose prose-lg max-w-none text-gray-700">
                  @php(the_content())
                </div>
                
                @if ($email = get_post_meta(get_the_ID(), 'team_email', true))
                  <div class="mt-8">
                    <a href="mailto:{{ $email }}" class="inline-flex items-center bg-blue-700 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition">
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
