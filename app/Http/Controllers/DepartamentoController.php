<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\departamento;

class DepartamentoController extends Controller
{
    //esta función registra un departamento

    public function crearDepartamento(Request $request){
        $Departamento = new departamento();
        $Departamento->nombre_departamento = $request->Dep_nombre;
        $Departamento->id_zona = $request->identificadorZona; // Asignar directamente a id_zona en Departamento
        $Departamento->save();

        //$Zona = new Zona();
        //$Zona->id_zona = $request->identificadorZona;
        //$Zona->save();

        return response()->json([
            "succes"=>true,
            "message"=>"Departamento registrado",
            "data"=>"Se creo el registro con el id de zona: ".$Departamento->id_zona,
            "cantidad"=>1
        ]);
    }

    public function obtener(){
        $Departamento = new departamento();
        $datos = $Departamento::All();


        return response()->json([
            "succes"=>true,
            "message"=>"Aqui estan los departamentos registrados",
            "data"=>$datos
            
        ]);
    }
}
