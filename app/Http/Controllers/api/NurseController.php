<?php

namespace App\Http\Controllers\api;

use App\Employee;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\NursesResource;
use App\Http\Resources\NurseResource;
use App\Nurse;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nurses = Nurse::with(['job'])->get();
        return NursesResource::collection($nurses);
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
            'job_id'=>'required',
            'sex_id'=>'required',
            'blood_id'=>'required',
            'date_of_hiring'=>'required',
            'user_role_id'=>'required'
        ]);
        $user = new User();
        $user->role_id = 2;
        $user->Identification_number = $request->input('Identification_number');
        $user->name = $request->input('first_name');
        $user->password = Hash::make($request->input('Identification_number'));
        $user->api_token = bin2hex(openssl_random_pseudo_bytes(30));
        $user->role_id = $request->input('user_role_id');
        $user->save();

        $nurse = new Nurse();
        $nurse->first_name = $request->input('first_name');
        $nurse->second_name = $request->input('second_name');
        if($request->has('third_name'))
            $nurse->third_name = $request->input('third_name');
        $nurse->nationality_id = $request->input('nationality_id');
        $nurse->address = $request->input('address');
        if($request->has('date_of_birth'))
            $nurse->date_of_birth = $request->input('date_of_birth');
        $nurse->phone = $request->input('phone');
        $nurse->email = $request->input('email');
        if($request->has('social_status'))
            $nurse->social_status = $request->input('social_status');
        $nurse->job_id = $request->input('job_id');
        $nurse->sex_id = $request->input('sex_id');
        $nurse->blood_id = $request->input('blood_id');
        if($request->has('notes'))
            $nurse->notes = $request->input('notes');
        if($request->has('image'))
            $nurse->image = $request->input('image');
        $nurse->date_of_hiring = $request->input('date_of_hiring');
        $nurse->user_id = $user->id;
        $nurse->save();
        return  new NurseResource($nurse);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nurse = Nurse::with(['job','sex','blood','nationality','user'])->find($id);
        return new NurseResource($nurse);
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
        $nurse = Nurse::find($id);
        if($request->has('first_name'))
            $nurse->first_name = $request->get('first_name');
        if($request->has('second_name'))
            $nurse->second_name = $request->get('second_name');
        if($request->has('third_name'))
            $nurse->third_name = $request->get('third_name');
        if($request->has('nationality_id'))
            $nurse->nationality_id = (int)$request->get('nationality_id');
        if($request->has('address'))
            $nurse->address = $request->get('address');
        if($request->has('date_of_birth'))
            $nurse->date_of_birth = $request->get('date_of_birth');

        if($request->has('phone'))
            $nurse->phone = $request->get('phone');
        if($request->has('email'))
            $nurse->email = $request->get('email');
        if($request->has('social_status'))
            $nurse->social_status = $request->get('social_status');
        if($request->has('job_id'))
            $nurse->job_id = (int)$request->get('job_id');
        if($request->has('sex_id'))
            $nurse->sex_id = (int)$request->get('sex_id');
        if($request->has('blood_id'))
            $nurse->blood_id = (int)$request->get('blood_id');
        if($request->has('notes'))
            $nurse->notes = $request->get('notes');
        if($request->has('image'))
            $nurse->image = $request->get('image');
        if($request->has('user_role_id')){
            $user = User::find($nurse->user_id);
            $user->role_id = $request->get('user_role_id');
            $user->save();
        }
        $nurse->save();
        $showNurse = Nurse::find($id);
        return new NurseResource($showNurse);
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
