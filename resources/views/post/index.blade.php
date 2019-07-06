@extends('./layout.main')

@section('title', 'Posts')
@section('content')

<h1 class="mt-5">@lang('Posts')
    <small class="float-right">
        <a class="btn btn-primary btn-sm" href="{{ route('posts.create') }}"><i class="fa fa-plus"></i> new Post</a>
    </small>
</h1>

<hr>

@isset($posts)
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-md-3">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <h3><a href="{{ route('posts.show', $post) }}" >{{ $post->title }}</a></h3>     
                </div>
            <small class="">{{ $post->updated_at->diffforHumans() }}</small>
                <p>{{ $post->content }}</p>
                <a class="btn btn-light btn-sm" href="#">Read ...</a>
            </div>
        </div>
        <hr>
    @endforeach
    {{ $posts->links() }}
@endisset

@endsection()