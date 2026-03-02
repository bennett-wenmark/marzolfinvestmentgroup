@extends('layouts.app')

@section('content')
  <div class="blog-index container mx-auto px-4 py-12">
    <header class="blog-header mb-12">
      <h1 class="text-4xl font-bold text-gray-900">{{ __('Blog', 'sage') }}</h1>
      @if (is_home() && !is_front_page())
        <p class="text-gray-600 mt-2">{{ __('Latest updates and insights', 'sage') }}</p>
      @endif
    </header>

    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Sorry, no posts were found.', 'sage') !!}
      </x-alert>
    @else
      <div class="posts-grid grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @while(have_posts()) @php(the_post())
          @include('partials.content')
        @endwhile
      </div>

      <div class="pagination mt-12">
        {!! get_the_posts_pagination([
          'mid_size' => 2,
          'prev_text' => __('← Previous', 'sage'),
          'next_text' => __('Next →', 'sage'),
        ]) !!}
      </div>
    @endif
  </div>
@endsection
