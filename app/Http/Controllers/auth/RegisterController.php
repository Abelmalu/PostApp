<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;





class RegisterController extends Controller
{
    public function index(){
        
        return view('auth.register');
}
    public function store(Request $request){
        
        $this->validate($request,[
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            

        ]);

        User::create(
            [
                'name'=>$request->name,
                'username'=>$request->username,
                'email'=>$request->email,
                'password'=>Hash::make($request->name),
            ]

        );

        return redirect()->route('dashboard');
}
}