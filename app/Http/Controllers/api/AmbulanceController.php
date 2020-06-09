<?php

namespace App\Http\Controllers\Api;

use App\Ambulance;
use App\Http\Resources\AmbulanceResource;
use App\Http\Resources\AmbulancesResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AmbulanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambulances = Ambulance::with(['driver','paramedic'])->paginate();
        return new AmbulancesResource($ambulances);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ambulance = Ambulance::with(['driver','paramedic'])->where('id', $id)->get();
        return new AmbulanceResource($ambulance);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ambulance = Ambulance::find($id);
        $showAmbulance = Ambulance::where('id',$id)->get();
        if($request->has('car_number'))
            $ambulance->car_number = $request->get('car_number');
        if($request->has('driver_id'))
            $ambulance->car_number = $request->get('driver_id');
        if($request->has('paramedic_id'))
            $ambulance->car_number = $request->get('paramedic_id');
        $ambulance->save();
        return new AmbulanceResource($showAmbulance);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
