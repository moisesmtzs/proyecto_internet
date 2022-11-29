<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ( !Gate::allows('view-servicio', $user) ) {
            abort(401);
        }
        $servicios = Servicio::all();
        return view('servicios.serviciosIndex', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if ( !Gate::allows('add-servicio', $user) ) {
            abort(401);
        }
        return view('servicios/addServicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if ( !Gate::allows('add-servicio', $user) ) {
            abort(401);
        }
        $request->validate([
            'nombre' => 'required|min:10|string',
            'precio' => 'required|min:0|numeric',
        ]);
        $servicio = Servicio::create($request->all());

        if ( $request->file('archivo')->isValid() ) {
            $ubi = $request->archivo->store('servicios');
            $archivo = new Archivo();
            $archivo->ubicacion = $ubi;
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $servicio->archivos()->save($archivo);
        }

        return redirect('/servicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        $user = Auth::user();
        if ( !Gate::allows('view-servicio', $user) ) {
            abort(401);
        }
        return view('servicios/showServicio', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        $user = Auth::user();
        if ( !Gate::allows('update-servicio', $user) ) {
            abort(401);
        }
        return view('servicios/editServicio', compact('servicio'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        $user = Auth::user();
        if ( !Gate::allows('update-servicio', $user) ) {
            abort(401);
        }
        $request->validate([
            'nombre' => 'required|min:10|string',
            'precio' => 'required|min:0|numeric',
        ]);
        $servicio->nombre = $request->nombre;
        $servicio->precio = $request->precio;
        $servicio->save();
        return view('servicios/showServicio', compact('servicio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect('/servicio');
    }

    public function downloadFile(Archivo $archivo) {
        return Storage::download($archivo->ubicacion);
    }

}
