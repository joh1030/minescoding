<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\UserInfo;
use App\User;
use App\Team;


// home route
Route::get('/', function() {
	// if there's a user currently logged in, redirect to /user/{id}
	if( Auth::check() ) {
		$id = Auth::user()->id;
        return redirect('/users/' . $id);
    }
    // if not, return home page
    return view('home');
});

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// User routes
Route::get('/users/{id}', function($id) {
    if (Auth::user()->id != $id) {
        return redirect()->back(); // redirect back if current user tries to access another user
    }
    $user_info = UserInfo::where('user_id', $id)->first();
    $user = User::findorfail($id);
    return view('pages/show', compact('user', 'user_info'));
});
Route::get('/users/{id}/edit', function($id) {
    if (Auth::user()->id != $id) {
        return redirect()->back(); // redirect back if current user tries to access another user
    }
    $user_info = UserInfo::where('user_id', $id)->first();
    $user = User::findorfail($id);
    return view('pages/edit', compact('user', 'user_info'));
});
Route::post('/users/{id}/edit', 'UserController@update');

// Password routes
Route::controllers([
   'password' => 'Auth\PasswordController',
]);

// Admin routes - only accessible by admin user
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function() {
    Route::get('/admin', function() {
        $users = User::all();
        $users_info = UserInfo::all();
        $numTeams = count(Team::all());
        $nullteam = UserInfo::where('team_id', null)->first();
        return view('admin.teams', compact('users_info', 'users', 'numTeams', 'nullteam'));
    });
    Route::post('/admin', 'AdminController@generate');
    Route::get('/admin/generate', function() {
        return view('admin.generate');
    });
    Route::get('/admin/users/{id}', function($id) {
        $user = User::findorfail($id);
        $userinfo = UserInfo::findorfail($id);
        $numTeams = count(Team::all());
        return view('admin.user', compact('user', 'userinfo', 'numTeams'));
    });
    Route::post('/admin/users/{id}', 'AdminController@edit');
});