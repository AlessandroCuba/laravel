@extends('layouts.app')

@section('title', 'Home')
@section('content')

<h1 class="mt-5">@lang('Home')</h1>

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

@endsection()
