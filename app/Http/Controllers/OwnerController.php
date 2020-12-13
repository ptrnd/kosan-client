<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()//berisi detail
    {
        return view('owner/index');
    }

    public function tambah() //tampilan tambah kamar
    {
        return view('owner/tambah');
    }

    public function add() //proses tambah kamar
    {
        
        redirect('owner/index');
    }

    public function edit($id) //tampilan edit kamar
    {
        return view('owner/edit');
    }

    public function update($id) //proses edit kamar
    {
        
        redirect('owner/index');
    }

    public function delete($id) //proses hapus kamar
    {

        redirect('owner/index');
    }
}
