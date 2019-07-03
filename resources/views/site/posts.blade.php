@extends('./layout.main')

@section('title', 'Posts')
@section('content')

<h1>Posts</h1>

<ul>
    @isset ($posts)
        @foreach ($posts as $post)
            <li>{{ $post }}</li>
        @endforeach
    @else
        Not Posts found...!!!
    @endisset
</ul>

@endsection()