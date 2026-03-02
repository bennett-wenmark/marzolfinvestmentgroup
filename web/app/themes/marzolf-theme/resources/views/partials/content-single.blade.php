<article @php(post_class('single-post'))>
  <div class="container mx-auto px-4 py-12 max-w-4xl">
    
    <header class="post-header mb-8">
      <h1 class="post-title text-4xl font-bold text-gray-900 mb-4">
        {!! $title !!}
      </h1>
      @include('partials.entry-meta')
    </header>

    <div class="post-content entry-content prose prose-lg max-w-none">
      @php(the_content())
    </div>

    @if ($pagination())
      <footer class="post-pagination mt-12 pt-8 border-t border-gray-200">
        <nav class="page-nav flex justify-between" aria-label="Page">
          {!! $pagination !!}
        </nav>
      </footer>
    @endif

    <div class="post-comments mt-12 pt-8 border-t border-gray-200">
      @php(comments_template())
    </div>

  </div>
</article>
