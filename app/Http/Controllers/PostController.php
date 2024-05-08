<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(){

        $posts = Post::paginate(2);

        return view('posts.index',['posts'=>$posts]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'body'=>'required',
        ]);

        auth()->user()->posts()->create(

            ['body'=>$request->body]
        );

        return redirect('posts');



    }
}
