<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Categoria;
use App\Models\Genero;


use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscador = $request->buscar;
        $mascota = Mascota::where('nombre_mascota' , 'LIKE', '%' . $buscador . '%')
        ->orwhere('raza', 'LIKE', '%' . $buscador . '%')
        ->orwhere('edad', 'LIKE', '%' . $buscador . '%')
        ->orwhere('precio', 'LIKE', '%' . $buscador . '%')
        ->Paginate(7);
        return view('mascota.index', compact('mascota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genero = Genero::all();
        $categoria = Categoria::all();
        return \view('mascota.create', compact('categoria', 'genero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mascota = new Mascota();
        $mascota->nombre_mascota = $request->nombre_mascota;
        $mascota->raza = $request->raza;
        $mascota->edad = $request->edad;
        $mascota->precio = $request->precio;
        $mascota->id_categoria = $request->id_categoria;
        $mascota->fotografia = $request->fotografia;
        $mascota->id_genero = $request->id_genero;


        
       



        $mascota->save();

        return \redirect()->route('mascotas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $mascota = Mascota::find($id);
        return \view('mascota.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mascota = Mascota::find($id);
        $mascota->nombre_mascota = $request->nombre_mascota;
        $mascota->raza = $request->raza;
        $mascota->edad = $request->edad;
        $mascota->precio = $request->precio;
        $mascota->id_categoria = $request->id_categoria;

        $mascota->save();
        return \redirect()->route('mascotas.index');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mascota::destroy($id);
        return redirect()->route('mascotas.index');
    }
}
