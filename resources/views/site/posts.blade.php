@extends('./layout.main')

@section('title', 'Posts')
@section('content')

<h1 class="mt-5">Posts</h1>
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
                <h3>{{ $post }}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-light btn-sm" href="#">Read ...</a>
            </div>
        </div>
        <hr>
    @endforeach
@endisset

@endsection()