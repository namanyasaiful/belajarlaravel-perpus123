<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = DB::table('petugas')->get();
        return view('petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'tlp_petugas' => 'required',
            'alamat' => 'required',

        ]);

        $query = DB::table('petugas')->insert([
            'id' => $request['id'],
            'nama_petugas' => $request['nama_petugas'],
            'jabatan_petugas' => $request['jabatan_petugas'],
            'tlp_petugas' => $request['tlp_petugas'],
            'alamat' => $request['alamat'],

        ]);

        return redirect('/petugas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
