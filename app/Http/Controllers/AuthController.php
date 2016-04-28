<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 27-04-2016
 * Time: 08:48
 */

namespace App\Http\Controllers;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Symfony\Component\Console\Input\Input;

class AuthController extends BaseController {

    public function getLogin(){
        return \View::make('login');
    }

    public function postLogin(){
        $validator = \Validator::make(\Input::all(), [
            'username'=>"required",
            'password'=>"required"
        ]);
        if ($validator->fails()) {
            return \Redirect::route("login")->withErrors($validator);
        }
        $auth = \Auth::attempt([
            'username' => \Input::get('username'),
            'password' => \Input::get('password'),
        ], false);

        if (!$auth) {
            return \Redirect::route("login")->withErrors([
                "Forkert login"
            ]);
        }

        return \Redirect::route("home");
    }
    
    public function getNewUser(){
        return \View::make('registre');
    }

    public function postNewUser()
    {
        $validator = \Validator::make(\Input::all(), [
            "username"=>"required|unique:users",
            "password"=>"required|min:5",
            "password_gentag"=>"required|same:password"
        ]);
        if ($validator->fails()) {
            return \Redirect::route("new_user")->withErrors($validator)->withInput(\Input::only("username"));
        }
        $user = new User();
        $user->username = \Input::get("username");
        $user->password = \Hash::make(\Input::get("password"));
        $user->save();
        \Auth::attempt([
            'username' => \Input::get('username'),
            'password' => \Input::get('password'),
        ], false);
        return \Redirect::route("home");
    }

    public function getLogud(){
        \Session::flush();
        return \Redirect::route("home");
    }
}