<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 27-04-2016
 * Time: 08:48
 */

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class AuthController extends BaseController {

    public function getLogin(){
        return \View::make('login',[
        'items'=>Item::all()
        ]);
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
}