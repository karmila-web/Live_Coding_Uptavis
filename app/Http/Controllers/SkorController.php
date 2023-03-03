<?php

namespace App\Http\Controllers;

use App\Models\DataClub;
use App\Models\DataSkor;
use Illuminate\Http\Request;

class SkorController extends Controller
{

    public function index()
    {

        $pertandingan = DataSkor::get();
        return view('dashboard.index', ['pertandingan' => $pertandingan]);
    }

    public function create()
    {
        
        $klub = DataClub::all();
        return view('club.create_skor', compact('klub'));

    }

    public function store(Request $request)
    {
        // if (User::where('', $request->id)->exists())
        // {
        //  return redirect('tampilan-klasemen/create')->with('error_email', 'User telah terdaftar sebelumnya!');
        // }

        $validasi = DataSkor::create([
            'klub1' => $request->klub1,
            'skor_klub1' => $request->skor_klub1,
            'klub2' => $request->klub2,
            'skor_klub2' => $request->skor_klub2
        ]);

        if ($validasi) {
            return redirect('tampilan-klasemen')->with('sukses', 'Anggota berhasil ditambahkan!');
        } else {
            return redirect('menu-inputskor/create')->with('error', 'Anggota gagal ditambahkan!');
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
