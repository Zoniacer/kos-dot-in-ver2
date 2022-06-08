<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Kos;
class RoomController extends Controller
{
    public function addRoom(Request $request) {
        
        $request->validate([
            'image' => 'required'
        ]);
        
        $idKos = $request->idKos;
        $image = $request->image;

        $filename = time()."-".$image->getClientOriginalName();
        $path = $request->file('image')->storeAs("public/images", $filename);

        Room::create([
            'idKos' => $idKos,
            'imagePath' => $filename
        ]);

        return redirect('');
    }

    public function getRoom(int $idKos) {
        $rooms = Room::where('idKos', $idKos);
        return view('rooms', [$rooms]);
    }
}
