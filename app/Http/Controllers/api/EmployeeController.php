<?php

namespace App\Http\Controllers\api;

use App\Employee;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeesResource;
use App\Http\Resources\NurseResource;
use App\Http\Resources\NursesResource;
use App\Nurse;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::with(['job',])->get();
        return  EmployeesResource::collection($employees);
    }



    public function index1()
    {
        $nurses = Nurse::with(['job'])->get();
        return NursesResource::collection($nurses);
    }

    public function show1($id)
    {
        $nurse = Nurse::with(['job','sex','blood','nationality','user'])->find($id);
        return new NurseResource($nurse);
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
        $user->role_id = 2 ;
        $user->Identification_number = $request->input('Identification_number');
        $user->name = $request->input('first_name');
        $user->password = Hash::make($request->input('Identification_number'));
        $user->api_token = bin2hex(openssl_random_pseudo_bytes(30));
        $user->role_id = $request->input('user_role_id');

        $user->save();

        $employee = new Employee();
        $employee->first_name = $request->input('first_name');
        $employee->second_name = $request->input('second_name');
        if($request->has('third_name'))
            $employee->third_name = $request->input('third_name');
        $employee->nationality_id = (int)$request->input('nationality_id');
        $employee->address = $request->input('address');
        if($request->has('date_of_birth'))
            $employee->date_of_birth = $request->input('date_of_birth');
        $employee->phone = $request->input('phone');
        $employee->email = $request->input('email');
        if($request->has('social_status'))
            $employee->social_status = $request->input('social_status');
        $employee->job_id = (int)$request->input('job_id');
        $employee->sex_id = (int)$request->input('sex_id');
        $employee->blood_id = (int)$request->input('blood_id');
        if($request->has('notes'))
            $employee->notes = $request->input('notes');
        if($request->has('image'))
            $employee->image = $request->input('image');
        $employee->date_of_hiring = $request->input('date_of_hiring');
        $employee->user_id = $user->id;
        $employee->save();
        return  new EmployeeResource($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::with(['job','sex','blood','nationality','ambulance_drivers','ambulance_paramedics','user'])->find($id);
        return new EmployeeResource($employee);
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
        $employee = Employee::find($id);
        if($request->has('first_name'))
            $employee->first_name = $request->get('first_name');
        if($request->has('second_name'))
            $employee->second_name = $request->get('second_name');
        if($request->has('third_name'))
            $employee->third_name = $request->get('third_name');
        if($request->has('nationality_id'))
            $employee->nationality_id = (int)$request->get('nationality_id');
        if($request->has('address'))
            $employee->address = $request->get('address');
        if($request->has('date_of_birth'))
            $employee->date_of_birth = $request->get('date_of_birth');
        if($request->has('phone'))
            $employee->phone = $request->get('phone');
        if($request->has('email'))
            $employee->email = $request->get('email');
        if($request->has('social_status'))
            $employee->social_status = $request->get('social_status');
        if($request->has('job_id'))
            $employee->job_id = (int)$request->get('job_id');
        if($request->has('sex_id'))
            $employee->sex_id = (int)$request->get('sex_id');
        if($request->has('blood_id'))
            $employee->blood_id = (int)$request->get('blood_id');
        if($request->has('notes'))
            $employee->notes = $request->get('notes');
        if($request->has('image'))
            $employee->image = $request->get('image');
        if($request->has('user_role_id')){
            $user = User::find($employee->user_id);
            $user->role_id = $request->get('user_role_id');
            $user->save();
        }

        $employee->save();
        $showEmployee = Employee::find($id);
        return new EmployeeResource($showEmployee);
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
