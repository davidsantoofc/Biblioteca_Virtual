<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autores;

class AutorController extends Controller
{
    public function index(){
        $autores = Autores::all();

        return view('biblioteca.autores')->with('autores', $autores);
    }

}
