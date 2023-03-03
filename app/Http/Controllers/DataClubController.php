<?php

namespace App\Http\Controllers;

use App\Models\DataClub;
use App\Models\DataSkor;
use Illuminate\Http\Request;

class DataClubController extends Controller
{
    
    public function index()
    {
        // $skor = DataSkor::get();
// Jika skore lebih rendah dari pada lawan berarti tambah 1 kalah
        // dd($skor);

        $club = DataClub::get();
        $skor = DataSkor::all();

        return view('club.tampilan_klasemen', ['club' => $club], compact('skor'));
    }

    public function create()
    {
        return view('club.create');
    }

    public function store(Request $request)
    {
        
        $validasi = DataClub::create([
            'nama_klub' => $request->nama_klub,
            'kota_klub' => $request->kota_klub
        ]);

        if ($validasi) {
            return redirect('tampilan-klasemen')->with('sukses', 'Anggota berhasil ditambahkan!');
        } else {
            return redirect('tampilan-klasemen/create')->with('error', 'Anggota gagal ditambahkan!');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
