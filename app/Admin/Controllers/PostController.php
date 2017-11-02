<?php

namespace App\Admin\Controllers;

use \App\Post;

class PostController extends Controller
{
    //首页
    public function index(){
        return view('admin.post.index');
    }

    public function status(Post $post){
        //TODO...
        
    }
}