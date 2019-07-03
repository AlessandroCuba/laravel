<?php

use App\Helpers\MenuActive;

?>

<ul class="navbar-nav flex-column text-left">
    <li><a class="{{ MenuActive::setActive('home') }}" href="{{ route('home') }}">Home</a></li>
    <li><a class="{{ MenuActive::setActive('posts') }}" href="{{ route('posts') }}">My Posts</a></li>
    <li><a class="{{ MenuActive::setActive('contact') }}" href="{{ route('contact') }}">Contact</a></li>
    <li><a class="{{ MenuActive::setActive('about') }}" href="{{ route('about') }}">About me</a></li>
</ul>