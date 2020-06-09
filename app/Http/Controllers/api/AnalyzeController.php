<?php

namespace App\Http\Controllers\Api;

use App\Analyze;
use App\Http\Resources\AnalyzeResource;
use App\Http\Resources\AnalyzesResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnalyzeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analyzes = Analyze::with(['test'])->paginate();
        return new AnalyzesResource($analyzes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $analyze = Analyze::with(['test'])->where('id',$id)->get();
        return new AnalyzeResource($analyze);
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
