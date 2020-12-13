<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $kos = Property::all();
        return view('index', ['kos' => $kos]);
    }

    public function recommended()
    {
        $kos = Property::all();
        return view('recommmended');
    }

    public function search($key)
    {
        $kos = Property::find($key);
        return view('search');
    }

    public function about()
    {
        return view('about');
    }
}
