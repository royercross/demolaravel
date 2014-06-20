<?php
/**
 * Created by PhpStorm.
 * User: royercross
 * Date: 19/06/14
 * Time: 11:01 PM
 */

class AuthController extends BaseController{

    public function login()
    {
        $data = Input::only('email','password','remember');

        $credentials = ['email' => $data['email'], 'password' => $data['password']];

        if(Auth::attempt($credentials, $data['remember']))
        {
            return Redirect::back();
        }

        return Redirect::back()->with('login_error',1);
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('home');
    }
} 