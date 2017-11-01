<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

//对应表-->posts
class Model extends BaseModel
{
    //
    protected $guarded = [];//不可以注入数据字段
    //protected $fillable = ['title', 'content'];//显示可以注入数据字段
}
