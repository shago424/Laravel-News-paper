<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'name', 'slug', 'status',
    ];

    public function subcategory(){
    	return $this->hasManay('App\SubCategory','category_id', 'id');
    }

    public function content(){
    	return $this->hasManay('App\Content','category_id', 'id');
    }

    public function post(){
    	return $this->hasManay('App\Post','category_id', 'id');
    }
}
