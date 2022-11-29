<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ( $user->admin ) {
            $citas = Cita::all();
            // $citas = Cita::with('getUser')->get();
        } else {
            $citas = Auth::user()->citas;
            // $citas = Cita::with('getUser')->get();
        }
        return view('citas/citasIndex', compact('citas', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicio::all();
        return view('citas/citasRegister', compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date|after:today',
            'hora' => 'required',
        ]);
        $request->merge(['user_id' => Auth::id()]);
        
        $cita = Cita::create($request->all());

        $cita->servicios()->attach($request->servicios_id);

        return redirect('/cita')->with('message', 'Cita creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        $this->authorize('view', $cita);
        return view('citas/showCita', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        if ( !Gate::allows('update-cita', $cita) ) {
            abort(401);
        }

        $servicios = Servicio::all();
        // $servicios = Servicio::with('citas')->get();

        return view('citas/citaEdit', compact('cita', 'servicios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'fecha' => 'required|date|after:today',
            'hora' => 'required'
        ]);
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->servicios()->attach($request->servicios_id);
        $cita->save();
        return view('citas/showCita', compact('cita'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $this->authorize('delete', $cita);
        $cita->servicios()->detach();
        $cita->delete();
        return redirect('/cita')->with('message', 'Cita eliminada correctamente');
    }
}
