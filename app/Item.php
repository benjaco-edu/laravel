<?php

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function mark(){
        $this->done = !$this->done;
        $this->save();
    }
}
/*
namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function mark(){
        $this->done = !$this->done;
        $this->save();
    }
}*/
