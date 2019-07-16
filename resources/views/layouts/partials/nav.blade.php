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
        <ul class="navbar-nav flex-row md-auto">
            @guest
                @if (Route::has('register'))
                    <li class="{{ MenuActive::setActive('register') }}">
                        <a class="nav-link" href="{{ route('register') }}">@lang('Register')</a>
                    </li>
                @endif
                <li class="{{ MenuActive::setActive('login') }}">
                    <a class="nav-link" href="{{ route('login') }}">@lang('Login')</a>
                </li>
            @else    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">My Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            @lang('Logout')
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>