<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InformasiKlien;
use Illuminate\Http\Request;

class InformasiKlienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kliens = InformasiKlien::all();
        return view('admin.informasi-klien.index', compact('kliens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.informasi-klien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nomorWA' => 'required|string|max:50',
            'jabatan' => 'required|string|max:255',
            'industri' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
        ]);

        InformasiKlien::create($validated);

        return redirect()->route('dashboard')->with('success', 'Klien berhasil ditambahkan.');
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
