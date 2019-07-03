@extends('./layout.main')

@section('title', 'Contact')
@section('content')

<h1 class="mt-5">@lang('Contact')</h1>
<hr>

<form action="{{ route('contact') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Your Name</label>
    <input class="form-control is-invalid" type="text" name="name" placeholder="Your Name..." value="{{ old('name') }}">
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label for="email">Your Email</label>
        <input class="form-control" type="email" name="email" placeholder="Your Email..." value="{{ old('email') }}">
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <input class="form-control" type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}">
        {!! $errors->first('subject', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label for="content">Message</label>
        <textarea class="form-control" name="content" id="content" rows="10" cols="30">
            {{ old('content') }}
        </textarea>
        {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
    </div>

     <button type="submit" class="btn btn-success">@lang('Send')</button>
</form>

@endsection()