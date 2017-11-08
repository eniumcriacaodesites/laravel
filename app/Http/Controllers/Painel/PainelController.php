<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Role;
use App\Permission;
use App\User;

class PainelController extends Controller
{
    public function index()
    {
    	$totalPosts = Post::count();
    	$totalRoles = Role::count();
    	$totalPermissions = Permission::count();
    	$totalUsers = User::count();

    	return view('painel.home.index', compact('totalPosts','totalRoles','totalPermissions','totalUsers'));
    }
}
