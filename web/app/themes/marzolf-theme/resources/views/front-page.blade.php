@extends('layouts.app')

@section('content')
  <div class="front-page">
    
    <!-- Hero Section Placeholder -->
    <section class="hero bg-gray-100 py-20">
      <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold text-gray-900 mb-4">
          {{ __('Welcome to ', 'sage') }}{{ $siteName }}
        </h1>
        <p class="text-xl text-gray-600 mb-8">
          {{ __('Modern financial planning and investment services', 'sage') }}
        </p>
        <p class="text-gray-500">
          {{ __('Homepage sections will be designed collaboratively.', 'sage') }}
        </p>
      </div>
    </section>

    <!-- Recent Posts -->
    <section class="recent-posts py-16">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">{{ __('Latest Updates', 'sage') }}</h2>
        
        @if (have_posts())
          <div class="posts-grid grid gap-8 md:grid-cols-2 lg:grid-cols-3 max-w-6xl mx-auto">
            @php
              $recent_posts = new WP_Query([
                'posts_per_page' => 3,
                'post_status' => 'publish',
              ]);
            @endphp
            @while($recent_posts->have_posts()) @php($recent_posts->the_post())
              @include('partials.content')
            @endwhile
            @php(wp_reset_postdata())
          </div>
          
          <div class="text-center mt-12">
            <a href="{{ get_permalink(get_option('page_for_posts')) }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition font-medium">
              {{ __('View All Posts', 'sage') }}
            </a>
          </div>
        @else
          <p class="text-center text-gray-600">{{ __('No posts yet. Check back soon!', 'sage') }}</p>
        @endif
      </div>
    </section>

  </div>
@endsection
