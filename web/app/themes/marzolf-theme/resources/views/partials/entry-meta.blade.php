<div class="entry-meta flex items-center gap-2 text-sm text-gray-600">
  <time class="post-date" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date() }}
  </time>
  <span class="text-gray-400">•</span>
  <span class="post-author">
    {{ __('By', 'sage') }} 
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="text-blue-600 hover:text-blue-800 transition">
      {{ get_the_author() }}
    </a>
  </span>
</div>
