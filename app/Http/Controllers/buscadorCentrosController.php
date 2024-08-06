<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; // Importar el facade de DB


class buscadorCentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allcenters = DB::table('centros')->get();
    
        return view('buscadorCentro', compact('allcenters')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // Get the 'material' input from the request
        $material = $request->input('material');

        // Query the database to find centers matching the material
        $allcenters = DB::table('centros')->where('materiales', 'like', "%$material%")->get();
    
        // Return the view with the matching centers
        return view('buscadorCentro', compact('allcenters'));
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
