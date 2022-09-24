<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // public $fillable =['name','description'];
    protected $fillable = array('name', 'description','image');


 public function products(){
        return $this->hasMany('App\Product');
    }

}
