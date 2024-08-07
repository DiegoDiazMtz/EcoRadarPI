<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCentro;
use App\Http\Requests\validadorCentroEdit;

use Illuminate\Support\Facades\DB; // Importar el facade de DB
use Illuminate\Support\Facades\Storage; // Importar el facade de Storage

class crudCentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allcenters = DB::table('centros')->get();
    
        return view('crudCentros', compact('allcenters')); // Retornar el conjunto de resultados de la consulta
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* return view('welcome'); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidadorCentro $request)
    {
        // Validación y manejo de la imagen
        if ($request->hasFile('imagen')) {
            // Generar un nombre único para el archivo basado en el tiempo y el nombre del centro
            $nombreArchivo = time() . '_' . $request->input('txtCentro') . '.' . $request->file('imagen')->getClientOriginalExtension();

            // Subir el archivo a la carpeta 'public/imagenes'
            $path = $request->file('imagen')->storeAs('public/imagenes', $nombreArchivo);

            // Obtener la URL pública del archivo
            $urlImagen = Storage::url($path);
        }

        // Obtener y concatenar los materiales seleccionados
        $materials = implode(', ', $request->input('boxMaterials', []));

        // Insertar el nuevo centro en la base de datos
        DB::table('centros')->insert([
            'centro' => $request->input('txtCentro'),
            'ubicacion' => $request->input('txtUbicacion'),
            'materiales' => $materials,
            'url' => $request->input('txtURL'),
            'imagen' => $urlImagen, // Guardar la URL de la imagen
        ]);

        // Redirigir con mensaje de confirmación
        return redirect('/crudCentros')->with('confirmacion', 'Centro agregado con éxito');
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
    public function update(validadorCentroEdit $request, string $id)
    {
        // Obtener el centro actual para acceder a la imagen existente
        $centro = DB::table('centros')->where('id', $id)->first();
    
        // Validación y manejo de la imagen
        if ($request->hasFile('imagen')) {
            // Generar un nombre único para el archivo basado en el tiempo y el nombre del centro
            $nombreArchivo = time() . '_' . $request->input('txtCentro') . '.' . $request->file('imagen')->getClientOriginalExtension();
    
            // Subir el archivo a la carpeta 'public/imagenes'
            $path = $request->file('imagen')->storeAs('public/imagenes', $nombreArchivo);
    
            // Obtener la URL pública del archivo
            $urlImagen = Storage::url($path);
        } else {
            // Mantener la imagen existente si no se sube una nueva
            $urlImagen = $centro->imagen;
        }
    
        // Obtener y concatenar los materiales seleccionados
        $materials = implode(', ', $request->input('boxMaterials', []));
    
        // Actualizar el centro en la base de datos
        DB::table('centros')->where('id', $id)->update([
            'centro' => $request->input('txtCentro'),
            'ubicacion' => $request->input('txtUbicacion'),
            'materiales' => $materials,
            'url' => $request->input('txtURL'),
            'imagen' => $urlImagen, // Guardar la URL de la imagen
        ]);
    
        return redirect('/crudCentros')->with('confirmacion', 'Centro editado con éxito');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Obtener el registro del centro que se va a eliminar
        $centro = DB::table('centros')->where('id', $id)->first();
    
        // Verificar si el centro existe y tiene una imagen asociada
        if ($centro && $centro->imagen) {
            // Eliminar la imagen del almacenamiento
            // Nota: Si usaste storeAs, la URL completa incluirá '/storage/', que no es parte del path real en el almacenamiento
            $imagePath = str_replace('/storage/', 'public/', $centro->imagen);
            
            // Verificar si el archivo existe antes de eliminar
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
        }
    
        // Eliminar el registro de la base de datos
        DB::table('centros')->where('id', $id)->delete();
    
        return redirect('/crudCentros')->with('confirmacion', 'Centro eliminado con éxito');
    }
}
