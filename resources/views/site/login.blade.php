@extends('./layout.main')

@section('content')
<h1 class="mt-5">@lang('Login')</h1>

<form class="form-inline" method="POST" action="{{ route('login.form') }}">
    @csrf
    <div class="form-group mb-2">
        <label for="email" class="sr-only">Email</label>
        <input type="text" class="form-control" id="email" placeholder="yourmail@example.com">
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">Password</label>
        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary mb-2">login</button>
</form>
    
@endsection