<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class blog extends Controller
{
    //
    public function blog(Request $request){
        
        $posts=posts::get();
        return view('home_blog',compact('posts'));
    }
    public function showform(){
        return view('blog_post_form');
    }
    public function savePost(Request $request){
        $title=$request->title;
        $contents=$request->content;
        $tags=$request->tags;


        
        $post= new posts();
        $post->title=$title;
        $post->content=$contents;
        $post->tags=$tags;
        $post->save();

        return "{'message':'success'}";
    }
}
