<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Builder;


//对应表-->posts
class Post extends Model
{


    //全局scope方式
    protected static function boot(){

        parent::boot();

        static::addGlobalScope('avaible', function(Builder $builder){
            $builder->whereIn('status', [0,1]);
        });
    }
}
