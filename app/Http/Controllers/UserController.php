<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
       $entris = Entry::where('user_id',$user->id)->get();
       return view('guest.show',['user'=>$user,'entris'=>$entris]);
    }
}
