<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\User;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
    	$entris = Entry::orderBy('id','DESC')->paginate('10');
       return view('inicio',compact('entris'));
    }

}
