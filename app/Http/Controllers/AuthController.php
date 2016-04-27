<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 27-04-2016
 * Time: 08:48
 */

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class AuthController extends Controller {

    public function getIndex(){
        return \View::make('home');
    }

    public function postLogin(){
        
    }
}