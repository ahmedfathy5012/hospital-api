<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\NursesResource;
use App\Http\Resources\NurseResource;
use App\Nurse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nurses = Nurse::with(['Job','sex','blood','nationality','user'])->paginate();
        return new NursesResource($nurses);
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
        $nurse = Nurse::with(['job'])->where('id' , $id)->get();
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
        if($request->has('specialization_id'))
            $nurse->nationality_id = $request->get('nationality_id');
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
            $nurse->job_id = $request->get('job_id');
        if($request->has('sex_id'))
            $nurse->sex_id = $request->get('sex_id');
        if($request->has('blood_id'))
            $nurse->blood_id = $request->get('blood_id');
        if($request->has('notes'))
            $nurse->notes = $request->get('notes');
        if($request->has('image'))
            $nurse->notes = $request->get('image');
        if($request->has('date_of_hiring'))
            $nurse->date_of_hiring = $request->get('date_of_hiring');

        $nurse->save();
        $showNurse = Nurse::where('id',$id)->get();
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
