<?php


namespace App\Http\Controllers;
use App\Item;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;


class HomeController extends BaseController{
    public function getIndex(){
        $items = Item::all();

        var_dump($items);

        return \View::make('home',[
            'items'=>$items
        ]);
    }
}