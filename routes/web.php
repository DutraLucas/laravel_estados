<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@dashboard');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/dashboard', 'HomeController@dashboard');

//Estados
Route::get('estados/', 'EstadosController@index');
Route::get('estados/cadastrar', 'EstadosController@cadastrar');
Route::post('estados/insert', 'EstadosController@insert');
Route::get('estados/editar/{estado}', 'EstadosController@editar');
Route::patch('estados/update/{estado}', 'EstadosController@update');
Route::get('estados/visualizar/{estados}', 'EstadosController@visualizar');
Route::get('estados/excluir/{estados}', 'EstadosController@excluir');

//Usuarios
Route::get('users/', 'UsersController@index');
Route::get('users/cadastrar', 'UsersController@cadastrar');
Route::post('users/insert', 'UsersController@insert');
Route::get('users/editar/{user}', 'UsersController@editar');
Route::patch('users/update/{uer}', 'UsersController@update');
Route::get('users/deletar/{user}', 'UsersController@deletar');
Route::get('users/visualizar/{user}', 'UsersController@view');
Route::post('users/user_role', 'UsersController@user_role');
Route::get('users/profile', 'UsersController@profile');
Route::post('users/update_avatar', 'UsersController@update_avatar');

//Acls
Route::get('acl/roles', 'Permissions_rolesController@roles');
Route::get('acl/role_view/{role}', 'Permissions_rolesController@view_role');
Route::get('acl/role_cadastrar', 'Permissions_rolesController@cadastrar_role');
Route::post('acl/role_insert', 'Permissions_rolesController@insert_role');
Route::get('acl/role_delete/{role}', 'Permissions_rolesController@deletar_role');
Route::post('acl/role_permissions', 'Permissions_rolesController@role_permissions');
Route::get('acl/permissions', 'Permissions_rolesController@permissions');
Route::post('acl/permission_insert', 'Permissions_rolesController@insert_permission');
Route::get('acl/get_permission', 'Permissions_rolesController@view_permission');
