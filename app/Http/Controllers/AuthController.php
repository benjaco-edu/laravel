<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 27-04-2016
 * Time: 08:48
 */


class AuthController extends BaseController {

    public function getLogin(){
        return View::make('login');
    }

    public function postLogin(){
        
    }
}