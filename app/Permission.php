<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
	//Pega as relações da tabela roles
    public function roles()
    {
    	return $this->belongsToMany(\App\Role::class);
    }
}
