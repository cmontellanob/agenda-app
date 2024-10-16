<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Models\Profesion;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $agendas=Agenda::all();
        return view('agenda.index',[
            'agendas'=>$agendas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profesiones = Profesion::orderBy("nombre")->get();
        return view('agenda.create',[
            'profesiones'=>$profesiones
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $input=$request->all();
     
       Agenda::create($input);
       return redirect()->route('agenda.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda)
    {
        return view('agenda.show',[
            'agenda'=>$agenda
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda)
    {
        $profesiones = Profesion::orderBy("nombre")->get();
        return view('agenda.edit',[
            'agenda'=>$agenda,
            'profesiones'=>$profesiones

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agenda $agenda)
    {
       $input=$request->all();
       $agenda->update($input);
       return redirect()->route('agenda.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        return redirect()->route('agenda.index'); 
    }
}
