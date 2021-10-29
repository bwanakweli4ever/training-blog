<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\posts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $user=Auth::user()->name;
      $count_posts=posts::count();
      $all_posts=posts::get();
      
        return view('admin.index',compact('user','count_posts','all_posts'));
    }
    public function detelePost($id){
      $post = posts::find($id);
      if($post){
      $post->delete();
      }
      return redirect('/home')->with('status', 'Post Deteled!');

    }

    public function editPost($id){
      $posts=posts::where('id',$id)->first();

      return view('admin.edit-post',compact('posts'));
    }
   

   public function performUpdate(Request $request){
       
        $post= posts::find($request->id);
        $post->title=$request->title;
        $post->content=$request->contents;
        $post->tags=$request->tags;
        $post->save();

        return redirect('/home')->with('status', 'Post updated!');

       }



}

