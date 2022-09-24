<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('name', 'category_id');

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
