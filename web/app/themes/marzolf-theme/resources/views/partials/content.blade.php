<article @php(post_class('post-card bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300'))>
  @if (has_post_thumbnail())
    <a href="{{ get_permalink() }}" class="block">
      {!! get_the_post_thumbnail(null, 'medium_large', ['class' => 'w-full h-48 object-cover']) !!}
    </a>
  @endif

  <div class="p-6">
    <header class="mb-4">
      <h2 class="entry-title text-xl font-bold mb-2">
        <a href="{{ get_permalink() }}" class="text-gray-900 hover:text-blue-600 transition">
          {!! $title !!}
        </a>
      </h2>
      @include('partials.entry-meta')
    </header>

    <div class="entry-summary text-gray-600">
      @php(the_excerpt())
    </div>

    <a href="{{ get_permalink() }}" class="inline-block mt-4 text-blue-600 hover:text-blue-800 font-medium transition">
      {{ __('Read more →', 'sage') }}
    </a>
  </div>
</article>
