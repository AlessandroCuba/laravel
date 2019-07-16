@extends('./layouts.app')

@section('title', 'Edit Post')
@section('content')

<h1 class="mt-5">Edit Post "{{ $post->title }}"</h1>

<form action="{{ route('posts.update', $post) }}" method="POST">
    
    @method('PATCH')
    
    @include('post._form', [
        'button' => 'Update'
    ])
    
</form>

@endsection()