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
}
