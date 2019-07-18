<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name' => 'Admin']);
        // Permission::create(['name' => 'delete Post']);

        // $role = Role::findById(4);
        // $permission = Permission::findById(3);
        // $role->givePermissionTo($permission);

        //auth()->user()->givePermissionTo('publishe Post');
        //auth()->user()->assignRole(['Writer', 'Editor', 'Publisher']);

        //$roles = \auth()->user()->getRoleNames();

        //return User::permission('update Post')->get();


        return view('site.home');
    }
}
