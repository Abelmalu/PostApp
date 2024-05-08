@extends('layouts.app')


@section('content')

<div class="flex justify-center">

<div class="w-8/12 bg-white rounded-lg">
     <form action="{{route('posts')}}" method="post">
        @csrf
        <div class="mb-">
          <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg"></textarea>
        </div>
        <button type="submit" >Post</button>


     </form>

     @if($posts->count())
     @foreach($posts as $post)
     <span >
      {{$post->body}}
     </span>
      <span class="font-bold">
      {{$post->created_at->diffForHumans()}}
     </span>
     <br>
     <span class="font-bold">
      {{$post->user->name}}
     </span>
    
     <span> {{$post->likes->count()}}</span>

     @if(!$post->likedBy(auth()->user()))

        <form action="{{ route('posts.likes', $post->id) }}" method= "POST" class="text-blue-500">
          @csrf
          <button>Like</button>
        </form>

     @else
        <form action="{{ route('posts.likes', $post->id) }}" method= "post" class="mr-1">
          @csrf
          @method('DELETE')
          <button class="text-blue-500 mb-4 ">Unlike</button>
        </form>


    @endif
     @endforeach


     {{$posts->render()}}


     @else
     <p>there are no posts</p>

     @endif

  
@endsection