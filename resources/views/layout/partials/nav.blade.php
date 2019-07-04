<?php

use App\Helpers\MenuActive;

?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{ route('home') }}">My First App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="{{ MenuActive::setActive('home') }}">
                <a class="nav-link" href="{{ route('home') }}">@lang('Home')</a>
            </li>
            <li class="{{ MenuActive::setActive('posts') }}">
                <a class="nav-link" href="{{ route('posts.index') }}">@lang('Posts')</a>
            </li>
            <li class="{{ MenuActive::setActive('contact') }}">
                <a class="nav-link" href="{{ route('contact') }}">@lang('Contact')</a>
            </li>
            <li class="{{ MenuActive::setActive('about') }}">
                <a class="nav-link" href="{{ route('about') }}">@lang('About me')</a>
            </li>
        </ul>
    </div>
</nav>