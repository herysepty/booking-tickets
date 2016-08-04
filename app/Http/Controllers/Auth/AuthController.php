<?php

namespace hs\Http\Controllers\Auth;

use hs\User;
use Validator;
use hs\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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
            'firstname' => 'required|max:25',
                'lastname' => 'required|max:25',
                'username' => 'required|max:15|min:4',
                'password' => 'required|confirmed|min:4',
                'address' => 'required',
                'town' => 'required',
                'country' => 'required',
                'postcode' => 'required',
                'email' => 'required|email|max:255|unique:users',
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
        return User::create([

                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'username' => $data['username'],
                'password' => bcrypt($data['password']),
                'address' => $data['address'],
                'town' => $data['town'],
                'country' => $data['country'],
                'postcode' => $data['postcode'],
                'email' => $data['email'],
        ]);
    }
}
