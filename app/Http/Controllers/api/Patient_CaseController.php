<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\Patient_caseResource;
use App\Http\Resources\Patient_casesResource;
use App\Patient_Case;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Patient_CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient_cases = Patient_Case::with(['diagnose','patient'])->paginate();
        return new Patient_casesResource($patient_cases);
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
        $patient_case = Patient_Case::with(['diagnose','patient'])->where('id',$id)->get();
        return new Patient_caseResource($patient_case);
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
