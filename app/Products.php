<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //

    protected $fillable = [

        'name','cost','category_id','file'

    ];

    public function category(){


        return $this->belongsTo('App\Category');


    }



}
