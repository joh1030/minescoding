<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use App\User;
use App\UserInfo;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{   
    // delete???
    function show($id) {
        $user_info = UserInfo::where('user_id', $id)->first();
        $user = User::findorfail($id);
        return view('pages/show', compact('user', 'user_info'));
    }

    // delete???
    function edit($id) {
        $user = User::findorfail($id);
        $user_info = UserInfo::findorfail($id);
        return view('pages.edit', compact('user', 'user_info'));
    }
    
    function update($id){
        $user = User::findorfail($id);
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        //$user->password = Input::get('password');

        //$user_info = DB::table('users_info')->where('user_id', $id)->get();
        $user_info = UserInfo::where('user_id', $id)->first();
        $user_info->style = Input::get('style');
        $user_info->lang_one = Input::get('lang_one');
        $user_info->lang_two = Input::get('lang_two');
        $user_info->lang_three = Input::get('lang_three');
        $user_info->csci_261 = Input::get('csci_261');
        $user_info->csci_262 = Input::get('csci_262');
        $user_info->csci_306 = Input::get('csci_306');
        $user_info->csci_406 = Input::get('csci_406');

        // save new updated information
        $user->save();
        $user_info->save();

        // redirect to /users/{id}
        return redirect('/users/' . $id);
    }
}
