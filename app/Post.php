<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [

        'category_id',
        'avatar_id',
        'title',
        'body'

    ];


    public function user(){

        return $this->belongsTo('App\User');

    }

    public function avatar(){

        return $this->belongsTo('App\Avatar');

    }

    public function category(){

        return $this->belongsTo('App\Category');

    }

}