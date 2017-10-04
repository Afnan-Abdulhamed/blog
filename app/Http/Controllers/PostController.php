<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::latest()->get();     




        return view('posts.index',compact('posts'));
    }

    public function show(Post $post){
        // $post = Post::find($id); // shelto 3shan 3mlna model binding
        return view('posts.show', compact('post'));
    }

    //create new post
    public function create(){
        return view('posts.create');
    }    
       
     // htsht9l lma a3ml submit l post gded       
     public function store(){
        //create a new post using request data 

    //------------------ METHOD ONE---------------------- 
        // $post=new \App\Post ;
        // $post->title = request('title');
        // $post->body = request('body');

    //form validation 
    $this->validate(request() , [
'title'=>'required' ,
'body'=>'required' ,

    ]);    


    //------------------ METHOD TWO----------------------


        Post::create(request(['title','body'])); //Note: with method 2 we need to add protected fields to the post model file 

        

        // store in DB
       // $post->save(); METHOD 1
        //redirect 
        return redirect('/');

     }       

     //delete post
    public function delete($id){
       
         $post = Post::find($id);    
         $post->delete(); 
         return redirect('/');

    }    

    //update post

public function update($id){

    // $post = Post::find($id);    
    
    //print_r($post);
    $post = Post::findOrFail($id);
    
    // return view('posts.edit', compact('post'));
    
    return view('posts.update',compact('post'));

    

}

public function edit($id){
    
    $this->validate(request() , [
        'title'=>'required' ,
        'body'=>'required' ,
    ]);  

    Post::find($id)->update(request(['title','body']));

    return redirect('/');

}
    
     


}
