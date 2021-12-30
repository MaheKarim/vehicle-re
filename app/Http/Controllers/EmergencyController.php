<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Emergency;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class EmergencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
       return view('dashboards.users.emergency.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $emergencyRequest = new Emergency();
       $emergencyRequest->user_id = Auth::user()->name;
       $emergencyRequest->fill($request->all());
       $emergencyRequest->save();

        return redirect()->route('admin.dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $emergencys = Emergency::paginate();

        return view('dashboards.admins.emergency.all', compact('emergencys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Emergency::findOrFail($id);

        return view('dashboards.admins.emergency.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicle = Emergency::findOrFail($id);
        $vehicle->fill($request->all());
        $vehicle->update();

        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emergency $emergency)
    {
        //
    }
}
