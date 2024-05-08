<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Post;

class LikeController extends Controller
{
    public function store(Request $request, $id){
 
  
        $post = Post::find($id);
        

         if($post->likedBy($request->user())){
            return back();
         }
         
         else{
            $post->likes()->create(

            [ 'user_id'=>$request->user()->id,]
            );


            return back();

            }
    }


    public function destroy(Request $request, $id){
 
  
        $post = Post::find($id);

        $request->user()->likes()->where('post_id',$id)->delete();
        return back();
      
    }
}
