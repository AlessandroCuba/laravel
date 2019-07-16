<?php

namespace App\Helpers;

class MenuActive
{
   public static function setActive($routeName)
   {
       return \request()->routeIs($routeName) ? 'nav-item active' : 'nav-item';
   }
}