<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index()
    {
        return view('cari_kos');
    }

    public function search(Request $request)
    {
    }
}
