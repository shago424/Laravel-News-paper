<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Content extends Model
{
    use SoftDeletes;
	 protected $fillable = [
       
         'slug',
         'video_link',
         'category_id' ,
        ' sub_category_id',
        'title',
        'description',
        'file',
        'status',
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
