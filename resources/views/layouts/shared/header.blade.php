<header class="masthead" style="background-image: url(@if (Request::is('post/*')) {{ asset(Voyager::image($post->image)) }} @elseif (Request::is('about')) {{ asset(Voyager::image($page->image)) }} @else {{ asset('assets/img/home-bg.jpg') }} @endif )">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      @if (Request::is('post/*'))

        <div class="post-heading">
          <h1>{{ $post->title }}</h1>
          <h2 class="subheading">{{ str_limit($post->excerpt, 100) }}</h2>
          <span class="meta">Posted by
            <a href="#">{{ $post->category->name }}</a>
            on {{ $post->created_at->format('Y-F-d')  }}</span>
        </div>

        @elseif (Request::is('about'))

        <div class="site-heading">
          <h1>{{ $page->title }}</h1>
          <span class="subheading">{{ str_limit($page->excerpt, 100) }}</span>
        </div>

        @elseif (Request::is('contact'))

        <div class="site-heading">
          <h1>Contact Me</h1>
          <span class="subheading">Please contact me as soon as you can</span>
        </div>

        @else

        <div class="site-heading">
          <h1>{{setting('site.title')}}</h1>
          <span class="subheading">{{ setting('site.description') }}</span>
        </div>

      @endif

      </div>
    </div>
  </div>
</header>

