<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.login');
    }
}
