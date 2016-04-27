<?php


namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;


class HomeController extends BaseController{
    public function getIndex(){
        \Schema::table('users', function( $t){
            $t->renameColumn("name", "username");

        });

        return \View::make('home');
    }
}