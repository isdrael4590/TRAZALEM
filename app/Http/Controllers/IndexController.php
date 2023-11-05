<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Funcion para mostrar la página principal y pasar por la autorización primero
    public function index(){

        return view("index");
    }
}
