<?php

namespace App\Http\Controllers\Api;

use App\Diagnose;
use App\Http\Resources\DiagnoseResource;
use App\Http\Resources\DiagnosesResource;
use App\Http\Resources\ShowDiagnosesResource;
use App\Patient_Case;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiagnoseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnoses = Diagnose::with(['patient_case','doctor'])->paginate();
        return ShowDiagnosesResource::collection($diagnoses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }


    public function addCase(Request $request)
    {
        $request->validate([
            'diagnose' => 'required',
            'doctor_id'=>'required',
            'patient_id'=>'required',
            'entry_date'=>'required'
        ]);

        $case = new Patient_Case();
        $case->patient_id = $request->input('patient_id');
        $case->entry_date = $request->input('entry_date');
        if($request->input('exit_date'))
        $case->exit_date = $request->input('exit_date');

        $case->save();
        $diagnose = new Diagnose();
        $diagnose->diagnose = $request->input('diagnose');
        $diagnose->doctor_id = $request->input('doctor_id');
        $diagnose->patient_case_id = $case->id;
        if($request->has('drugs'))
            $diagnose->drugs = $request->input('drugs');

        $diagnose->save();
        return new DiagnoseResource($diagnose);

    }


    public function addDiagnose(Request $request)
    {
        $request->validate([
            'diagnose' => 'required',
            'doctor_id'=>'required',
            'patient_case_id'=>'required',
        ]);
        $case = Patient_Case::find($request->input('patient_case_id'));
        $diagnose = new Diagnose();
        $diagnose->diagnose = $request->input('diagnose');
        $diagnose->doctor_id = $request->input('doctor_id');
        $diagnose->patient_case_id = $request->input('patient_case_id');
        if($request->has('drugs'))
        $diagnose->drugs = $request->input('drugs');

        $diagnose->save();
        return new DiagnoseResource($diagnose);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnose = Diagnose::with(['patient_case','doctor'])->find($id);
        return new DiagnoseResource($diagnose);
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
        $diagnose = Diagnose::find($id);
        if($request->has('diagnose'))
            $diagnose->diagnose = $request->get('diagnose');
        if($request->has('drugs'))
            $diagnose->drugs = $request->get('drugs');
        if($request->has('doctor_id'))
            $diagnose->doctor_id = $request->get('doctor_id');
        if($request->has('patient_case_id'))
            $diagnose->patient_case_id = $request->get('patient_case_id');
        $diagnose->save();
        $diagnose = Diagnose::find($id);
        return new DiagnoseResource($diagnose);
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
