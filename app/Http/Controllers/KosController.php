<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KosController extends Controller
{
    public function add(Request $request) {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'tersedia' => 'required',
            'ac' => 'required',
            'listrik' => 'required',
            'wifi' => 'required',
            'wc' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Kos sukses dimasukkan');
    }

    public function create(array $data) {
        return Kos::create([
            'ownerId' => $data['ownerId'],
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'kecamatan' => $data['kecamatan'],
            'kota' => $data['kota'],
            'provinsi' => $data['provinsi'],
            'tersedia' => $data['tersedia'],
            'ac' => $data['ac'],
            'listrik' => $data['listrik'],
            'wifi' => $data['wifi'],
            'wc' => $data['wc'],
            'perabot' => $data['perabot'],
        ]);
    }

    public function getKosById(int $id) {
        $kos = Kos::where('id', $id);
        return $kos;
    }

    public function getKosByFilter(Request $request) {
        $data = $request->all();
        // Code Here
    }
}
