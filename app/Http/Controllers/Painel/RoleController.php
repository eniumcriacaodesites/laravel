<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;

class RoleController extends Controller
{
  private $post;

  public function __construct(Role $role)
  {
   $this->role = $role; 	
 }

 public function index()
 {
   $roles = $this->role->all();

   return view('painel.roles.index', compact('roles'));
 }

 public function permissions($id)
 {
    //Recupera Role
  $role = $this->role->find($id);

  //Recuperar Permissões
  $permissions = $role->permissions()->get();

  return view('painel.roles.permissions', compact('role', 'permissions'));
}
}
