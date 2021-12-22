<?php

namespace App\Http\Controllers;

use App\Models\ServiceCenter;
use App\Models\Area;
use Illuminate\Http\Request;

class ServiceCenterController extends Controller
{

    public function index()
    {
        $centers = ServiceCenter::paginate(12);
//        dd($centers);
        return view('dashboards.admins.service_center.index', compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        return view('dashboards.admins.service_center.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $center = new ServiceCenter();
        $center->fill($request->all());
        if ($center->save()) {
            return response()->json([
                'status' => 1,
                'msg' => 'Your requested created successfully! '
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ServiceCenter $serviceCenter
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCenter $serviceCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ServiceCenter $serviceCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceCenter $serviceCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ServiceCenter $serviceCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCenter $serviceCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ServiceCenter $serviceCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCenter $serviceCenter)
    {
        //
    }
}
