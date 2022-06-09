<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Kos;
class RoomController extends Controller
{
    public function addRoom(Request $request) {
        
        $request->validate([
            'image' => 'required|max:10000'
        ]);
        
        $idKos = $request->idKos;
        $image = $request->image;

        $filename = time()."-".$image->getClientOriginalName();
        $path = $request->file('image')->storeAs("public/images", $filename);

        Room::create([
            'idKos' => $idKos,
            'title' => "Panorama",
            'imagePath' => $filename
        ]);

        return redirect()->back()->withSuccess('Gambar sukses dimasukkan');
    }

    public function getRooms(int $idKos) {
        $rooms = Room::where('idKos', $idKos);
        return view('rooms', compact('rooms'));
    }

    public function getRoom(int $id) {
        $room = Room::where('idKos', $id)->get();
        // dd($room);
        $path = $room[0]->imagePath;
        return view('room', compact('path'));
    }
}
