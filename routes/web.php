<?php

//Adicionando prefixo nas rotas
Route::group(['prefix'=>'painel'], function(){
	

	//PostController

	//PermissionController

	//RoleController

	//PainelController
	Route::get('/', 'Painel\PainelController@index');
});

Auth::routes();

Route::get('/', 'SiteController@index');
