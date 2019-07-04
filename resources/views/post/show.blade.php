@extends('./layout.main')

@section('title', $post->title)
@section('content')

<h1 class="mt-4">{{ $post->title }}</h1>
<p class="lead">by <a href="#">{{ $post->author }}</a><p>
<p>Posted on {{ $post->updated_at->diffforHumans() }}</p>    
<hr>

<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

<p class="lead">
    {{ $post->content }}
</p>

@endsection()