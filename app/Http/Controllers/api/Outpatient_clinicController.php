<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Outpatient_clinicResource;
use App\Http\Resources\Outpatient_clinicsResource;
use App\Outpatient_clinic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Outpatient_clinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outpatient_clinics = Outpatient_clinic::with(['specialization'])->paginate();
        return new Outpatient_clinicsResource($outpatient_clinics);
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
        $outpatient_clinic = Outpatient_clinic::with(['specialization'])->where('id',$id)->get();
        return new Outpatient_clinicResource($outpatient_clinic);
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
        //
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
