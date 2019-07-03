@extends('./layout.main')

@section('title', 'Contact')
@section('content')

<h1>Contact</h1>

<form action="{{ route('contact') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Your Name...">
    <input type="email" name="email" placeholder="Your Email...">
    <input type="text" name="subject" placeholder="Your Subject...">
    <textarea name="subject" id="" cols="30" rows="10"></textarea>
    <button>Send</button>
</form>

@endsection()