<?php

namespace App\Http\Controllers\api;

use App\Booking_date;
use App\Http\Resources\Booking_dateResource;
use App\Http\Resources\Booking_datesResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Booking_dateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $booking_dates  = Booking_date::with(['patient'])->paginate();
       return new Booking_datesResource($booking_dates);
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
        $booking_date  = Booking_date::with(['patient'])->where('id',$id)->get();
        return new Booking_dateResource($booking_date);
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
