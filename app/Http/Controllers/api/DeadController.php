<?php

namespace App\Http\Controllers\Api;

use App\Dead;
use App\Http\Resources\DeadResource;
use App\Http\Resources\DeadsResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deads = Dead::with(['doctor','patient'])->paginate();
        return new DeadsResource($deads);
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
        $dead = Dead::with(['doctor','patient'])->where('id',$id)->get();
        return new DeadResource($dead);
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
