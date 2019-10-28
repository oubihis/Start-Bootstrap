@extends('layouts.app')

@section('content')

@foreach($mypages as $page)
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
			{!! $page->body !!}
        </div>
      </div>
    </div>
  </article>
	
@endforeach

@endsection