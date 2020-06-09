<?php

namespace App\Http\Controllers\Api;

use App\Diagnose;
use App\Doctor;
use App\Http\Resources\DiagnoseResource;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\OperationResource;
use App\Http\Resources\OperationsResource;
use App\Http\Resources\ShowOperationsResource;
use App\Operation;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operations = Operation::with(['patient'])->paginate();
        return  ShowOperationsResource::collection($operations);
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
            'anesthesiologist_id' => 'required',
            'surgeon_id'=>'required',
            'anesthetic_id'=>'required',
            'patient_id'=>'required',
            'name_of_surgery'=>'required',
            'date_of_surgery'=>'required',
        ]);

        $operation = new Operation();

        $operation->anesthesiologist_id = $request->input('anesthesiologist_id');
        $operation->surgeon_id = $request->input('surgeon_id');
        $operation->anesthetic_id = $request->input('anesthetic_id');
        $operation->patient_id = $request->input('patient_id');
        $operation->name = $request->input('name_of_surgery');
        $operation->date = $request->input('date_of_surgery');

        $operation->save();
        return new OperationResource($operation);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operation = Operation::with(['patient'])->find($id);
        return  new OperationResource($operation);
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
        $operation = Operation::find($id);
        if($request->has('anesthesiologist_id'))
            $operation->anesthesiologist_id = $request->get('anesthesiologist_id');
        if($request->has('surgeon_id'))
            $operation->surgeon_id = $request->get('surgeon_id');
        if($request->has('anesthetic_id'))
            $operation->anesthetic_id = $request->get('anesthetic_id');
        if($request->has('patient_id'))
            $operation->patient_id = $request->get('patient_id');
        if($request->has('anesthetic_id'))
            $operation->anesthetic_id = $request->get('anesthetic_id');
        if($request->has('name_of_surgery'))
            $operation->name = $request->get('name_of_surgery');
        if($request->has('date_of_surgery'))
            $operation->date = $request->get('date_of_surgery');
        $operation->save();
        $operation = Operation::find($id);
        return new OperationResource($operation);
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
