<?php

namespace App\Http\Controllers\Api;

use App\Doctor_problem;
use App\Http\Resources\Doctor_problemResource;
use App\Http\Resources\Doctor_problemsResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Doctor_problemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docotr_problems = Doctor_problem::with(['doctor'])->paginate();
        return new Doctor_problemsResource($docotr_problems);
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
        $docotr_problem = Doctor_problem::with(['doctor'])->where('id',$id)->get();
        return new Doctor_problemResource($docotr_problem);
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
