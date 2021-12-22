<?php

namespace App\Http\Controllers;


use App\Models\Emergency;
use App\Models\Vehicle;
use App\Models\ServiceCenter;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function index()
   {
       $vehicles = Vehicle::where('user_id', Auth::user()->id)->count();
       $emergencys = Emergency::where('user_id', Auth::user()->id)->count();
       $centers = ServiceCenter::all();
       
       return view('dashboards.users.index', compact('vehicles', 'emergencys', 'centers'));
   }

   function profile(){
       return view('dashboards.users.profile');
   }
   function settings(){
       return view('dashboards.users.settings');
   }
}
