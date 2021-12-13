<?php

namespace App\Http\Controllers;


use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function index()
   {
       $vehicles = Vehicle::where('user_id', Auth::user()->id)->count();
    return view('dashboards.users.index', compact('vehicles'));
   }

   function profile(){
       return view('dashboards.users.profile');
   }
   function settings(){
       return view('dashboards.users.settings');
   }
}
