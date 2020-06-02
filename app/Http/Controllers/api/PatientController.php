<?php

namespace App\Http\Controllers\api;

use App\Doctor;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\PatientResource;
use App\Http\Resources\PatientsResource;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return PatientsResource::collection(Patient::all());
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
            'first_name'=>'required',
            'first_name'=>'required',
            'second_name'=>'required',
            'nationality_id'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'social_status'=>'required',
            'job'=>'required',
            'sex_id'=>'required',
            'blood_id'=>'required',
            'date_of_file'=>'required',
            'user_role_id'=>'required'
        ]);
        $user = new User();
        $user->role_id = 3 ;
        $user->Identification_number = $request->input('Identification_number');
        $user->name = $request->input('first_name');
        $user->password = Hash::make($request->input('Identification_number'));
        $user->api_token = bin2hex(openssl_random_pseudo_bytes(30));
        $user->role_id = $request->input('user_role_id');
        $user->save();
        // Hash::make($request->input('Identification_number'));
        $patient = new Patient();

        $patient->first_name = $request->input('first_name');
        $patient->second_name = $request->input('second_name');
        if($request->has('third_name'))
            $patient->third_name = $request->input('third_name');
        $patient->nationality_id = (int)$request->input('nationality_id');
        $patient->address = $request->input('address');
        if($request->has('date_of_birth'))
            $patient->date_of_birth = $request->input('date_of_birth');
        $patient->phone = $request->input('phone');
        $patient->email = $request->input('email');
        if($request->has('social_status'))
            $patient->social_status = $request->input('social_status');
        $patient->job = $request->input('job');
        $patient->sex_id =(int) $request->input('sex_id');
        $patient->blood_id = (int)$request->input('blood_id');
        if($request->has('notes'))
            $patient->notes = $request->input('notes');
        if($request->has('image'))
            $patient->image = $request->input('image');
        $patient->date_of_file = $request->input('date_of_file');
        $patient->user_id = $user->id;

        $patient->save();
        return new PatientResource($patient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::with(['sex','blood','nationality','patient_problems','patient_cases','dead','operations','tests','emergencies','booking_dates','user'])->find($id);

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
            $patient->nationality_id = (int)$request->get('nationality_id');
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
            $patient->sex_id = (int)$request->get('sex_id');
        if($request->has('blood_id'))
            $patient->blood_id = (int)$request->get('blood_id');
        if($request->has('notes'))
            $patient->notes = $request->get('notes');
        if($request->has('image'))
            $patient->notes = $request->get('image');
        if($request->has('date_of_file'))
            $patient->date_of_file = $request->get('date_of_file');
        if($request->has('user_role_id')){
            $user = User::find($patient->user_id);
            $user->role_id = $request->get('user_role_id');
            $user->save();
        }
        $patient->save();
        $showPatient = Patient::find($id);
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
