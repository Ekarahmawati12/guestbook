<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institutions = Institution::all();
        return view('pages.institutions.index', compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.institutions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi data
    $request->validate([
        'name' => 'required|string|max:255',
        
    ]);

    // Simpan data
    $institutions = Institution::create($request->all());

    // Redirect setelah sukses
    return redirect()->route('admin.institution.index')->with('success', 'Data Institution berhasil disimpan.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $institutions = Institution::findOrFail($id);

        // Kirim data ke view
        return view('pages.institutions.show', compact('institutions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $institutions = Institution::find($id);
        return view('pages.institutions.edit', compact('institutions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $institutions= Institution::find($id);
        $institutions->update($request->all());
        return redirect()->route('admin.institution.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $institutions= Institution::find($id);
        $institutions->delete();
        return redirect()->route('admin.institution.index');
    }
}
