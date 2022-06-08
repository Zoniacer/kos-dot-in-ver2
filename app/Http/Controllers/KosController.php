<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kos;
use Illuminate\Support\Facades\Auth;

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
            'deskripsi' => 'required',
            'tersedia' => 'required',
            // 'ac' => 'required',
            'listrik' => 'required',
            // 'wifi' => 'required',
            'wc' => 'required',
            'harga' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'hp' => 'required|numeric'
        ]);

        $image = $request->image;

        $filename = time() . "-" . $image->getClientOriginalName();
        $path = $request->file('image')->storeAs("public/covers", $filename);

        $data = $request->all();
        if ($request->has('ac')) {
            $data['ac'] = 1;
        } else {
            $data['ac'] = 0;
        }
        if ($request->has('wifi')) {
            $data['wifi'] = 1;
        } else {
            $data['wifi'] = 0;
        }
        $data['filename'] = $filename;
        // dd($data);
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Kos sukses dimasukkan');
    }

    public function create(array $data)
    {
        return Kos::create([
            'ownerId' => Auth::user()->id,
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'kecamatan' => $data['kecamatan'],
            'kota' => $data['kota'],
            'provinsi' => $data['provinsi'],
            'deskripsi' => $data['deskripsi'],
            'tersedia' => $data['tersedia'],
            'ac' => $data['ac'],
            'listrik' => $data['listrik'],
            'wifi' => $data['wifi'],
            'wc' => $data['wc'],
            'perabot' => $data['perabot'],
            'harga' => $data['harga'],
            'hp' => $data['hp'],
            'coverPath' => $data['filename']
        ]);
    }

    public function getKosById(int $id)
    {
        $kos = Kos::where('id', $id)->get();
        return redirect('detail-kos', compact('kos'));
    }

    public function getKosSearchPage()
    {
        return view('cari_kos');
    }

    public function getKosAddPage()
    {
        return view('addKos');
    }

    public function getKosByFilter(Request $request)
    {
        $data = $request->all();

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

        
        if ($request->listrik != null) {
            $kos = $kos->where('listrik', $request->listrik);
        }
        if ($request->wc != null) {
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
        return view('hasilPencarian', compact('kos'));

    }

    public function dashboard() {
        $kos = Kos::inRandomOrder()->limit(1)->get();
        return view('home', compact('kos'));
    }
}
