<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $fillable = [
       
         'slug',
         'video_link',
         'category_id' ,
        ' sub_category_id',
        'title',
        'description',
        'file',
        'status',
        'link',
        'tag',
        'image',
        
    ];

      public function user(){
        return $this->belongsTo('App\User','created_by', 'id');
    }

     public function category(){
        return $this->belongsTo('App\Category','category_id', 'id');
    }

      public function subcategory(){
        return $this->belongsTo('App\SubCategory','sub_category_id', 'id');
    }
    
}
