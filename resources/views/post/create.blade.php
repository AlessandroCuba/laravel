@extends('./layouts.app')

@section('title', 'Create new Post')
@section('content')

<h1 class="mt-5">Create new Post"</h1>

<form action="{{ route('posts.store') }}" method="post">
    @include('post._form', [
        'button' => 'Save'
    ])
</form>

@endsection()