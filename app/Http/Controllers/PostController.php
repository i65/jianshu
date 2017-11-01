<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //列表
    public function index(){
        $posts = [
            [
                'title' => 'this is a title1'
            ],
            [
                'title' => 'this is a title2'
            ],
            [
                'title' => 'this is a title3'
            ],
            [
                'title' => 'this is a title4'
            ]
        ];
        return view('post/index', compact('posts'));
    }

    //详情页面
    public function show(){
        return view('post/show', ['title' => 'this is title', 'isShow' => false]);
   }

    //创建文章
    public function create(){
        return view('post/create');
    }

    //创建逻辑
    public function store(){

    }
    //编辑页面
    public function edit(){
        return view('post/edit');
    }

    //编辑逻辑
    public function update(){

    }

    //删除逻辑
    public function delete(){

    }




}
