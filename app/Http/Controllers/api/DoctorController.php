<?php

namespace App\Http\Controllers\Api;

use App\Doctor;
use App\Blood;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\DoctorsResource;
use App\Http\Resources\BloodResource;
use App\Http\Resources\DoctorsShowResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DoctorsResource::collection(Doctor::paginate());
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
            'specialization_id'=>'required',
            'nationality_id'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'social_status'=>'required',
            'job_id'=>'required',
            'sex_id'=>'required',
            'blood_id'=>'required',
            'date_of_hiring'=>'required',
            'user_role_id'=>'required'
        ]);
        $user = new User();
        $user->Identification_number = $request->input('Identification_number');
        $user->name = $request->input('first_name');
        $user->password = Hash::make($request->input('Identification_number'));
        $user->api_token = bin2hex(openssl_random_pseudo_bytes(30));
        $user->role_id = $request->input('user_role_id');
        $user->save();
   // Hash::make($request->input('Identification_number'));
        $doctor = new Doctor();

            $doctor->first_name = $request->input('first_name');
            $doctor->second_name = $request->input('second_name');
        if($request->has('third_name'))
            $doctor->third_name = $request->input('third_name');
            $doctor->specialization_id = (int)$request->input('specialization_id');
            $doctor->nationality_id = (int)$request->input('nationality_id');
            $doctor->address = $request->input('address');
        if($request->has('date_of_birth'))
            $doctor->date_of_birth = $request->input('date_of_birth');
            $doctor->phone = $request->input('phone');
            $doctor->email = $request->input('email');
        if($request->has('social_status'))
            $doctor->social_status = $request->input('social_status');
            $doctor->job_id = (int)$request->input('job_id');
            $doctor->sex_id = (int)$request->input('sex_id');
            $doctor->blood_id = (int)$request->input('blood_id');
        if($request->has('notes'))
            $doctor->notes = $request->input('notes');
        if($request->has('image'))
            $doctor->image = $request->input('image');
        $doctor->date_of_hiring = $request->input('date_of_hiring');
        $doctor->user_id = $user->id;

        $doctor->save();
        return new DoctorResource($doctor);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::with(['blood','job','sex','nationality','specialization','doctor_problems','deads','diagnoses','tests','emergencies','work_periods','operations_surgeon','user'])->find($id);
       // return  $doctor;
        return new DoctorResource($doctor);
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
        $doctor = Doctor::find($id);
        if($request->has('first_name'))
            $doctor->first_name = $request->get('first_name');
        if($request->has('second_name'))
            $doctor->second_name = $request->get('second_name');
        if($request->has('third_name'))
            $doctor->third_name = $request->get('third_name');
        if($request->has('specialization_id'))
            $doctor->specialization_id = $request->get('specialization_id');
        if($request->has('nationality_id'))
            $doctor->nationality_id = $request->get('nationality_id');
        if($request->has('address'))
            $doctor->address = $request->get('address');
        if($request->has('date_of_birth'))
            $doctor->date_of_birth = $request->get('date_of_birth');

        if($request->has('phone'))
            $doctor->phone = $request->get('phone');
        if($request->has('email'))
            $doctor->email = $request->get('email');
        if($request->has('social_status'))
            $doctor->social_status = $request->get('social_status');
        if($request->has('job_id'))
            $doctor->job_id = $request->get('job_id');
        if($request->has('sex_id'))
            $doctor->sex_id = $request->get('sex_id');
        if($request->has('blood_id'))
            $doctor->blood_id = $request->get('blood_id');
        if($request->has('notes'))
            $doctor->notes = $request->get('notes');
        if($request->has('image'))
            $doctor->image = $request->get('image');
        if($request->has('date_of_hiring'))
            $doctor->date_of_hiring = $request->get('date_of_hiring');
        if($request->has('user_role_id')){
            $user = User::find($doctor->user_id);
            $user->role_id = $request->get('user_role_id');
            $user->save();
        }

        $doctor->save();
        $doctor = Doctor::find($id);
        //$showDoctor = Doctor::where('id',$id)->get();
        return new DoctorResource($doctor);
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
