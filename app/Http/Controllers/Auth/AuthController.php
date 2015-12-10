<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserInfo;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    private $redirectTo = '/'; // redirect path

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $id = $user->id;

        $c261 = null;
        $c262 = null;
        $c306 = null;
        $c406 = null; 
        if(!empty($data['csci_261'])){
            $c261 = 'CSCI 261';   
        }
        if(!empty($data['csci_262'])){
            $c262 = 'CSCI 262';
        }
        if(!empty($data['csci_306'])){
            $c306 = 'CSCI 306';
        }
        if(!empty($data['csci_406'])){
            $c406 = 'CSCI 406';
        }

        UserInfo::create([
            'user_id' => $id,
            'style' => $data['style'],
            'lang_one' => $data['lang_one'],
            'lang_two' => $data['lang_two'],
            'lang_three' => $data['lang_three'],
            'csci_261' => $c261,
            'csci_262' => $c262,
            'csci_306' => $c306,
            'csci_406' => $c406,
        ]);

        return $user;
    }

}
