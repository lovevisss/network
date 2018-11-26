<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function ()
{
   return view('layouts.auth');
});

Route::get('/fakebg', function(){
    return view('layouts.fakebg');
});

Route::get('preload', function()
{
    return view('layouts.preload');
});

Route::get('qq', function ()
{
    return view('layouts.qq');
});

Route::get('jd', function ()
{
    return view('layouts.jd');
});

Route::get('testmoph', function ()
{
    $container = \App\Container::find(1);
    dd($container);
    foreach ($container->fastports() as $fastport)
    {
        dd($fastport);
    }
}

);


Auth::routes();
Route::post('login', ['as' => 'post-login', 'uses' => 'Auth\LoginController@postLogin']);
Route::get('backend/dashboard',['as' => 'backend.dashboard', 'uses' => 'Backend\DashboardController@index' ]);
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::get('backend/sudashboard', ['as' => 'backend.sudashboard', 'uses' => 'Backend\DashboardController@index_su' ]);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@getLogout']);

Route::get('users/index', ['as' => 'users.index', 'uses' => 'Backend\UsersController@index']);
Route::get('users/edit/{id}', ['as' => 'users.edit', 'uses' => 'Backend\UsersController@edit']);
Route::get('users/confirm/{id}', ['as' => 'users.confirm', 'uses' => 'Backend\UsersController@confirm']);
Route::delete('users/delete/{id}', ['as' => 'users.delete', 'uses' => 'Backend\UsersController@delete']);
Route::get('users/create', ['as' => 'users.create', 'uses' => 'Backend\UsersController@create']);
Route::post('users/store', ['as' => 'users.store', 'uses' => 'Backend\UsersController@store']);
Route::put('users/update/{id}', ['as' => 'users.update', 'uses' => 'Backend\UsersController@update']);

Route::get('servers/index', ['as' => 'servers.index', 'uses' => 'Backend\ServersController@index']);
Route::get('servers/edit/{id}', ['as' => 'servers.edit', 'uses' => 'Backend\ServersController@edit']);
Route::get('servers/create', ['as' => 'servers.create', 'uses' => 'Backend\ServersController@create']);
Route::post('servers/store', ['as' => 'servers.store', 'uses' => 'Backend\ServersController@store']);
Route::put('servers/update/{id}', ['as' => 'servers.update', 'uses' => 'Backend\ServersController@update']);
Route::get('servers/confirm/{id}', ['as' => 'servers.confirm', 'uses' => 'Backend\ServersController@confirm']);
Route::delete('servers/delete/{id}', ['as' => 'servers.delete', 'uses' => 'Backend\ServersController@delete']);


Route::get('container/index', ['as' => 'containers.index', 'uses' =>'Backend\ContainersController@index']);