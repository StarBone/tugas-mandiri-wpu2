<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AnggotaController extends Controller
{
    public function index() {
        $anggota = Anggota::orderBy('id', 'desc')->get();
        return view('v_anggota.index', [
            'judul' => 'Data Anggota',
            'index' => $anggota
        ]);
    }

    public function create()
    {
        return view('v_anggota.create', [
            'judul' => 'Tambah Anggota'
        ]);
    }

    public function store(Request $request)
    {
        // Debugging request data
        // dd($request);
        // atau untuk lebih banyak informasi debugging
        // ddd($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'hp' => 'required|min:10|max:13',
        ]);
        Anggota::create($validatedData);
        return redirect('/anggota');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $anggota = Anggota::find($id);
        return view('v_anggota.edit', [
            'judul' => 'Ubah Anggota',
            'edit' => $anggota
        ]);
    }

    public function update(Request $request, string $id)
    {
        $rules = [
            'nama' => 'required|max:100',
            'hp' => 'required|min:10|max:13',
        ];
        $validatedData = $request->validate($rules);
        Anggota::where('id', $id)->update($validatedData);
        return redirect('/anggota');
    }

    public function destroy(string $id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect('/anggota');
    }

}

