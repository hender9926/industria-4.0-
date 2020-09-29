<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Turno;

class TurnosController extends Controller
{

    public function index()
    {
        $turnos = Turno::orderby('tur_cod', 'ASC')->get();
        $data = array('turnos'=>$turnos);        
        return view('turno.index')->with($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $turno = new Turno;
        $turno->tur_nom =  mb_strtoupper($request->tur_nom);
        $turno->tur_ini =  $request->tur_ini;
        $turno->tur_fin =  $request->tur_fin;
        $turno->tur_cod =  substr($turno->tur_nom, 0, 3)."".substr($turno->tur_ini, 0, 2)."".substr($turno->tur_fin, 0, 2);
        $turno->save();  

        return redirect()->route('turnos.index')->with('msg-success','Turno Registrado Exitosamente!');    
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
