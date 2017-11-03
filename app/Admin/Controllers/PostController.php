<?php

namespace App\Admin\Controllers;

use App\Post;

class PostController extends Controller
{
    //首页
    public function index(){

        $posts = Post::withoutGlobalScope('avaible')->where('status', 0)->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.post.index', compact('posts'));
    }

    public function status(Post $post){

        $this->validate(request(), [
           'status' => 'required|in: -1,1',
        ]);

        $post->status = request('status');
        $post->id = request('id');
        $post->update();

        return [
            'error' => 0,
            'msg' => ''
        ];
    }
}