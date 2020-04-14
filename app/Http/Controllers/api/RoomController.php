<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\RoomResource;
use App\Http\Resources\RoomsResource;
use App\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::paginate();
        return new RoomsResource($rooms);
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
            'room_number' => 'required',
            'bed_conunt' => 'required'
        ]);
        $room = new Room();

        $room->room_number = $request->get('room_number');
        $room->bed_conunt = $request->get('bed_conunt');

        $room->save();

        return  new RoomResource($room);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::where('id',$id)->get();
        return new RoomResource($room);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $deletedRoom = Room::where('id',$id)->get();
        $room->delete();
        return new RoomResource($deletedRoom);
    }
}
