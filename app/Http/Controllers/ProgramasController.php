<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Program;
use App\Models\Faculty;

class ProgramasController extends Controller
{
    public function index(){
        $programas = DB::table('programa')
                    ->join('facultad','facultad', '=', 'codfacultad' )->get();
                    // select * from programa join facultad on facultad= codfacultad;
        return view('programas.listado', ['program'=> $programas]);
    }

    public function form_registro(){
        $facultades = DB::table('facultad')->get();
        return view('programas.form_registro' , ['faculty'=>$facultades]);
    }

    public function registrar(Request $request){
        $programa = new Program();
        $programa->codprograma = $request->input('cod_programa');
        $programa->nomprograma = $request->input('nom_programa');
        $programa->facultad = $request->input('nom_facultad');
        $programa->save();
        return redirect()->route('listado_programas');
    }
}
