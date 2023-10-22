<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//access the authenticated user via the Auth Facade
use Illuminate\Support\Facades\Auth;
use App\Models\Post;



class PostController extends Controller
{
    //action to return a view containing a form for blog post creation

    public function create()
    {
        return view('posts.create');
    }

    //action to receive form data and subsequently store said data in the post table
    //this action needs a paramater of class Request
    public function store(Request $request)
    {
        //if there is an authenticated user
        if(Auth::user()){
            //instantiate a new Post object from the Post Model
            $post = new Post;

            //define the properties of the $post object from the received form data
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            //get the id of the authenticated user and set it as a foreign key user_id of the new post
            $post->user_id = (Auth::user()->id);

            //save the post object in the database
            $post->save();

            return redirect('/posts');
        }else{
            return redirect('/login');
        }
    }

    //method that will return a view showing all blog posts

    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('dogs',$posts);
    }

}
