@extends('./layouts.app')

@section('title', $post->title)
@section('content')

<h1 class="mt-4">{{ $post->title }}</h1>

<div class="row">
    <div class="col-md-9">
        <p class="lead">by <a href="#">{{ $post->author }}</a>
            am posted on {{ $post->updated_at->diffforHumans() }}
        <p>
    </div>
    <div class="col-md-3 text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
            @can('edit Post')
                <a class="btn btn-warning btn-sm" href="{{ route('posts.edit', $post) }}"><i class="fa fa-pen-fancy"></i></a>
            @endcan
            <form method="POST" action="{{ route('posts.delete', $post) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
            </form>
        </div>
    </div>
</div>
<hr>

<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

<p class="lead">
    {{ $post->content }}
</p>

@endsection()
