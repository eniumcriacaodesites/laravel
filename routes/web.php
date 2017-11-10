<?php

//Adicionando prefixo nas rotas
Route::group(['prefix'=>'painel'], function(){
	//PostController
		Route::get('posts', 'Painel\PostController@index');

	//PermissionController
		Route::get('permissions', 'Painel\PermissionController@index');

	//RoleController
		Route::get('roles', 'Painel\RoleController@index');	
			Route::get('roles/{id}/permissions', 'Painel\RoleController@permissions');	

		//UserController
		Route::get('users', 'Painel\UserController@index');
	
	//PainelController
	Route::get('/', 'Painel\PainelController@index');
});

Auth::routes();

Route::get('/', 'SiteController@index');
