<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
     protected $fillable = [
        'name', 'slug', 'status','category_id',
    ];

     public function category(){
    	return $this->belongsTo('App\Category','category_id', 'id');
    }

    public function content(){
    	return $this->hasManay('App\Content','sub_category_id', 'id');
    }

     public function post(){
    	return $this->hasManay('App\Post','sub_category_id', 'id');
    }

}
