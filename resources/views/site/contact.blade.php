@extends('./layout.main')

@section('title', 'Contact')
@section('content')

<h1 class="mt-5">@lang('Contact')</h1>
<hr>

<form action="{{ route('contact') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Your Name</label>
    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Your Name..." value="{{ old('name') }}">
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    </div>

    <div class="form-group">
        <label for="email">Your Email</label>
        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Your Email..." value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <input class="form-control" type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}">
        @error('subject')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
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