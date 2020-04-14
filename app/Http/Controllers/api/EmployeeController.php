<?php

namespace App\Http\Controllers\api;

use App\Employee;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeesResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::with(['job','sex','blood','nationality','ambulance_drivers','ambulance_paramedics','user'])->paginate();
        return  new EmployeesResource($employees);
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
        $employee = Employee::with(['job','sex','blood','nationality','ambulance_drivers','ambulance_paramedics','user'])->where('id',$id)->get();
        return  new EmployeeResource($employee);
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
        if($request->has('specialization_id'))
            $employee->nationality_id = $request->get('nationality_id');
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
            $employee->job_id = $request->get('job_id');
        if($request->has('sex_id'))
            $employee->sex_id = $request->get('sex_id');
        if($request->has('blood_id'))
            $employee->blood_id = $request->get('blood_id');
        if($request->has('notes'))
            $employee->notes = $request->get('notes');
        if($request->has('image'))
            $employee->notes = $request->get('image');
        if($request->has('date_of_hiring'))
            $employee->date_of_hiring = $request->get('date_of_hiring');

        $employee->save();
        $showEmployee = Employee::where('id',$id)->get();
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
