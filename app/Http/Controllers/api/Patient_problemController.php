<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Patient_problemResource;
use App\Http\Resources\Patient_problemsResource;
use App\Patient_problem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Patient_problemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient_pronlems = Patient_problem::with(['patient'])->paginate();
        return  new Patient_problemsResource($patient_pronlems);
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
        $patient_pronlem = Patient_problem::with(['patient'])->where('id',$id)->get();
        return  new Patient_problemResource($patient_pronlem);
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
