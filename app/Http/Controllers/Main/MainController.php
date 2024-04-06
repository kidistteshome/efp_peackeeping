<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class MainController extends Controller

{
    public function index()
    {
        $news = File::where('type','1')->get();
        $short_news= File::pluck('discription')->implode(',');
     // dd($short_news);

      $truncatedText = Str::limit($short_news, 20);
        return view('layouts.home',compact('news','short_news','truncatedText'));
    }
    public function change_password()
    {
        return view('main.reset');

    }
    public function password_change(Request $request)
    {
     //  dd($request);
     $request->validate([
        'password' => 'required',
        'new_password' => 'required',
        'confirm_password' => 'required|same:new_password',
         'email' => 'required', 
     ]);
     //  dd($request);

            $password=$request->new_password;
            $email=$request->email;                      
    
            $user = User::where('email', $request->email)->first();
         if ($user && Hash::check($request->password, $user->password)) {
            User::where('email','=',$email)->update([
                'email'=>$email,
                'password' => Hash::make($request->new_password),
            ]);
        return back()->with("success", "Password updated successfully");

         }
     //  dd($request);
     
    
    return back()->with("status", "profile changed successfully!");
    }
  
    }

