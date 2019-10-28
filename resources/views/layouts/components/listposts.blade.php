  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      @foreach($myposts as $post)
        <div class="post-preview">
          <a href="/post/{{ $post->slug }}">
            <h2 class="post-title">
              {{ $post->title }}
            </h2>
            <h3 class="post-subtitle">
              {{ str_limit($post->excerpt, 100) }}
            </h3>
          </a>
          <p class="post-meta">Posted by
            
            
            <span class="font-weight-bold">{{ $post->category->name }}</span>
            
            on {{ $post->created_at->format('Y F d')  }}</p>
        </div>
        <hr>
      @endforeach

        <!-- Pager -->
        <div class="clearfix">
          @if ($myposts->hasMorePages())
            <a class="btn btn-primary float-right" href="{{ $myposts->nextPageUrl() }}">
            Older Posts &rarr;</a>

          @else
            <a class="btn btn-primary float-right" href="{{ $myposts->previousPageUrl() }}">
           &larr; No more Go Back</a>
          @endif
        </div>
      </div>
    </div>
  </div>
