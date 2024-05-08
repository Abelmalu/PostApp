<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Post;

class LikeController extends Controller
{
    public function store(Request $request, $id){

  
        $post = Post::find($id);

        $post->likes()->create(

           [ 'user_id'=>$request->user()->id,]
        );


        return back();
    }
}
