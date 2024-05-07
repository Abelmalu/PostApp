@extends('layouts.app')

@section('content')

<form action="{{ route('register')}}" method="POST">
    @csrf
    @error('name')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
    @enderror
    name:
    <input type="text" name="name" id="name" value="{{old('name')}}"><br>
   


    @error('username')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
    @enderror
    username:
    <input type="text" name="username" id="username" value="{{old('username')}}"><br>


    @error('email')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
    @enderror
    email:
    <input type="email" name="email"><br>



     @error('password')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
    @enderror
    password:
    <input type="password" name="password" id="password"><br>

     @error('password_confirmation')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
    @enderror
    confirm password:
    <input type="password" name="password_confirmation" id="password_confirmation"><br>
    <button type="sumbit"> register</button>
</form>


@endsection