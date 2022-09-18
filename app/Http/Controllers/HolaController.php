<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index(){
        $hola = "174450 Willian Salas Ccolqque, Hola Mundo";
        return view("welcome",compact("hola"));
    }
}
