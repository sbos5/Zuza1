<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index()
    {
          $post=Post::all();
          return view('post_index', [
            'post' =>$post
        ]);
    }
    public function show($id)
    { 
        $post=Post::find($id); 
      
        return view('post_show', [ 'post' =>$post ]);
    }

       public function create(Request $request)
    { 
       if($request->has('title')) {
      
      $post1 = Post::create($request->all());
      return redirect('/post');
      }
      return view('post_create');
    }

    public function update(Request $request , $id)
    {
      
         if($request->has('title'))
          {
        $post1=Post::find($id);
        $post1->title=($request->title);
        $post1->content=($request->content);
        $post1->save();
        return redirect('/post');
          }
        
       $post=Post::find($id);
       return view('post_update', [ 'post'=>$post]);
    }


       public function delete(Request $request , Post $post, $id)

    {  
        
        
       $post=Post::find($id)->delete();

        

       return view('post_delete', [ 'id' =>$id]);
    } 

   
}
