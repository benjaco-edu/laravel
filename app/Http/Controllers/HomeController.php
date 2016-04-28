<?php


namespace App\Http\Controllers;
use App\Item;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Symfony\Component\Console\Input\Input;


class HomeController extends BaseController{
    public function getIndex(){
        $items = \Auth::user()->items();

        var_dump($items);

        return \View::make('home',[
            'items'=>$items
        ]);
    }

    public function postIndex(){
        $id = \Input::get('id');
        $item = Item::findOrFail($id);
        if ($item->user_id == \Auth::user()->id) {
            $item->mark();
        }
        return \Redirect::route('home');
    }

    public function getNew(){
        return \View::make("new");
    }

    public function postNew(){
        $validator = \Validator::make(\Input::all(), [
            'name'=>"required|min:3|max:255"
        ]);
        if ($validator->fails()) {
            return \Redirect::route("new")->withErrors($validator);
        }

        $item = new Item();
        $item->name = \Input::get("name");
        $item->user_id = \Auth::user()->id;
        $item->save();

        return \Redirect::route("home");

    }

    public function getDeleteDone(){
        $items = Item::where(['user_id'=> \Auth::user()->id, 'done'=> 1])->delete();
        return \Redirect::route("home");
    }
}