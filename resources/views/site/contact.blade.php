@extends('./layout.main')

@section('title', 'Contact')
@section('content')

<h1 class="mt-5">Contact</h1>
<hr>

<form action="{{ route('contact') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Your Name</label>
        <input class="form-control" type="text" name="name" placeholder="Your Name...">
    </div>

    <div class="form-group">
        <label for="email">Your Name</label>
        <input class="form-control" type="text" name="email" placeholder="Your Email...">
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <input class="form-control" type="text" name="subject" placeholder="Subject">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" id="message" rows="10" cols="30"></textarea>
    </div>

     <button type="submit" class="btn btn-success">Sign in</button>
</form>

@endsection()