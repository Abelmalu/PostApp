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
     <div class="mb-4">
      {{$post->body}}
     </div>
     <div class="font-bold">
      {{$post->user->name}}
     </div>
     <div class="font-bold">
      {{$post->created_at->diffForHumans()}}
     </div>
     @endforeach


     @else
     <p>there are no posts</p>

     @endif

  
@endsection