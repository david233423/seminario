<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    //
    public function index(){
        $estudiantes = DB::table('estudiante')
                    ->join('programa','programa', '=', 'codprograma' )->get();
                    // select * from programa join facultad on facultad= codfacultad;
        return view('estudiantes.listado', ['student'=> $estudiantes]);
    }

}
