<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class KosController extends Controller
{
    public function detail($id)
    {
        $kos = Property::find($id);
        return view('kos/index', ['kos', $kos]);
    }

    public function pesan($id) // halaman pesan kamar kos
    {
        $kamar = Property::find($id);
        return view('kos/pesan', ['kamar', $kamar]);
    }

    public function order($id) // proses pesan kamar kos
    {
        // Transaction::create([
            
        // ]);
    }
}
