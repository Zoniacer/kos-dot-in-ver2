<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kos;

class KosController extends Controller
{
    public function add(Request $request)
    {
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

    public function create(array $data)
    {
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

    public function getKosById(int $id)
    {
        $kos = Kos::where('id', $id);
        return redirect('detail-kos', [$kos]);
    }

    public function getKosSearchPage()
    {
        $provinsi = Kos::select('provinsi')->groupby()->get();
        // dd($provinsi);
        return view('cari_kos', compact('provinsi'));
    }

    public function getKosByFilter(Request $request)
    {
        $data = $request->all();
<<<<<<< HEAD

        $kos = Kos::where('provinsi', $request->provinsi)
            ->where('kota', $request->kota)
            ->where('kecamatan', $request->kecamatan)
            ->where('alamat', 'like', '%' . $request->alamat . '%')
            ->where('tersedia', '>', 0)
            ->get();

        if (sizeof($kos) == 0) {
            $kos = Kos::where('provinsi', $request->provinsi)
                ->where('kota', $request->kota)
                ->where('kecamatan', $request->kecamatan)
                ->where('tersedia', '>', 0)
                ->get();
        }

        if ($request->listrik !== null) {
            $kos = $kos->where('listrik', $request->listrik);
        }
        if ($request->wc !== null) {
            $kos = $kos->where('wc', $request->wc);
        }
        if ($request->has('ac')) {
            $kos = $kos->where('ac', 1);
        } else {
            $kos = $kos->where('ac', 0);
        }
        if ($request->has('wifi')) {
            $kos = $kos->where('wifi', 1);
        } else {
            $kos = $kos->where('wifi', 0);
        }
        // Code Here
        dd($kos);
=======
        
>>>>>>> 0694fa341ef0f4c68836abe3e9521edec95bb1b6
    }
}
