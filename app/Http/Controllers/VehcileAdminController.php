<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehcileAdminController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::paginate(10);

        return view('dashboards.admins.vehicles.index', compact('vehicles'));
    }

    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        return view('dashboards.admins.vehicles.edit', compact('vehicle'));
    }

    public function update($id, Request $request)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->only(['status']));

        return response()->json([
            'status' => 1,
            'msg' => 'Your requested updated successfully! '
        ]);
    }
}
