<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\resultbd;

class resultbdController extends Controller
{
    

    public function store(Request $request){
    	
    	$data=new resultbd();
        $data->name_equip=$request->name_equip;
    	$data->l_equipo= $request->l_equipo;
        $data->l_bd= $request->l_bd;
        $data->validation_bd = $request->validation_bd;
        $data->operator = $request->operator;
        $data->Observacion_bd=$request->Observacion_bd;


        $data->save();
        return Redirect()->route('add.resultbd');
    }
    

}