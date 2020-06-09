<?php

namespace App\Http\Controllers\Api;

use App\Anesthetic;
use App\Http\Resources\AnestheticResource;
use App\Http\Resources\AnestheticsResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnestheticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anesthetics = Anesthetic::all();
        return AnestheticsResource::collection($anesthetics);
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
        $anesthetic = Anesthetic::with(['operations'])->where('id',$id)->get();
        return new AnestheticResource($anesthetic);
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
