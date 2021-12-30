<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Emergency;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class EmergencyController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        $areas = Area::all();
       return view('dashboards.users.emergency.create', compact('areas'));
    }

    public function store(Request $request)
    {
       $emergencyRequest = new Emergency();
       $emergencyRequest->user_id = Auth::user()->name;
       $emergencyRequest->fill($request->all());
       $emergencyRequest->save();

        return redirect()->route('admin.dashboard');

    }

    public function show()
    {
        $emergencys = Emergency::paginate();

        return view('dashboards.admins.emergency.all', compact('emergencys'));
    }

    public function edit($id)
    {
        $vehicle = Emergency::findOrFail($id);

        return view('dashboards.admins.emergency.edit', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        $vehicle = Emergency::findOrFail($id);
        $vehicle->fill($request->all());
        $vehicle->update();

        return redirect()->route('admin.dashboard');
    }

    public function showUser()
    {
        $emergencys = Emergency::where('user_id', '=', Auth::user()->id)->get();

        return view('dashboards.emergency.all', compact('emergencys'));

    }
}
