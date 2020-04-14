<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\PatientResource;
use App\Http\Resources\PatientsResource;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::with(['sex','blood','nationality','patient_problems','patient_cases','dead','operations','tests','emergencies','booking_dates','user'])->paginate();
        return new PatientsResource($patients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Identification_number' => 'required',
            'first_name' => 'required',
            'second_name' => 'required',
            'third_name' => 'required' ,
            'nationality_id' => 'required' ,
            'address' => 'required' ,
            'date-of-birth' => 'required' ,
            'phone' => 'required' ,
            'email' => 'required' ,
            'social_status' => 'required' ,
            'job' => 'required' ,
            'sex_id' => 'required' ,
            'blood_id' => 'required',
        ]);
        $user = new User();
        $user->Identification_number = $request->get('Identification_number');
        $user->name = $request->get('first_name');

        $patient = new Patient();

        $patient->date_of_file = now();
        $patient->first_name = $request->get('first_name');
        $patient->second_name = $request->get('second_name');
        $patient->third_name = $request->get('third_name');
        $patient->nationality_id = $request->get('nationality_id');
        $patient->address = $request->get('address');
        $patient->phone = $request->get('phone');
        $patient->email = $request->get('email');
        $patient->social_status = $request->get('social_status');
        $patient->job = $request->get('job');
        $patient->sex_id = $request->get('sex_id');
        $patient->blood_id = $request->get('blood_id');
        //$patient->date-of-birth= $request->get('date-of-birth');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::with(['sex','blood','nationality','patient_problems','patient_cases','dead','operations','tests','emergencies','booking_dates','user'])->where('id',$id)->get();
        return new PatientResource($patient);
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
        $patient = Patient::find($id);
        if($request->has('first_name'))
            $patient->first_name = $request->get('first_name');
        if($request->has('second_name'))
            $patient->second_name = $request->get('second_name');
        if($request->has('third_name'))
            $patient->third_name = $request->get('third_name');
        if($request->has('nationality_id'))
            $patient->nationality_id = $request->get('nationality_id');
        if($request->has('address'))
            $patient->address = $request->get('address');
        if($request->has('date_of_birth'))
            $patient->date_of_birth = $request->get('date_of_birth');

        if($request->has('phone'))
            $patient->phone = $request->get('phone');
        if($request->has('email'))
            $patient->email = $request->get('email');
        if($request->has('social_status'))
            $patient->social_status = $request->get('social_status');
        if($request->has('job'))
            $patient->job = $request->get('job');
        if($request->has('sex_id'))
            $patient->sex_id = $request->get('sex_id');
        if($request->has('blood_id'))
            $patient->blood_id = $request->get('blood_id');
        if($request->has('notes'))
            $patient->notes = $request->get('notes');
        if($request->has('image'))
            $patient->notes = $request->get('image');
        if($request->has('date_of_file'))
            $patient->date_of_file = $request->get('date_of_file');

        $patient->save();
        $showPatient = Patient::where('id',$id)->get();
        return new PatientResource($showPatient);
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
