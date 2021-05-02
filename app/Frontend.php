<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
     protected $fillable = [
       
         'slogan',
         'link',
         'headtext' ,
        ' foottext',
        'email',
        'mobile',
        'logo',
        'mainlogo',
        'status',
    ];
}
