<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function myProfile(){
     $user = Auth::user();
     return view('pages.profil')->with('user', $user);
    }
}