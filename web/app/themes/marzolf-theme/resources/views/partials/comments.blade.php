@if (! post_password_required())
  <section id="comments" class="comments">
    
    @if ($responses())
      <h2 class="comments-title text-2xl font-bold text-gray-900 mb-6">
        {!! $title !!}
      </h2>

      <ol class="comment-list space-y-6">
        {!! $responses !!}
      </ol>

      @if ($paginated())
        <nav class="comment-navigation mt-8" aria-label="Comment">
          <ul class="pager flex justify-between">
            @if ($previous())
              <li class="previous">
                {!! $previous !!}
              </li>
            @endif

            @if ($next())
              <li class="next">
                {!! $next !!}
              </li>
            @endif
          </ul>
        </nav>
      @endif
    @endif

    @if ($closed())
      <x-alert type="warning" class="mt-6">
        {!! __('Comments are closed.', 'sage') !!}
      </x-alert>
    @endif

    <div class="comment-form-wrapper mt-8 pt-8 border-t border-gray-200">
      @php(comment_form())
    </div>
  </section>
@endif
