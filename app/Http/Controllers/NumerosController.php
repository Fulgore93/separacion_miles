<?php

namespace App\Http\Controllers;

use App\Http\Requests\NumerosStore;
use App\Http\Resources\NumerosResource;
use App\Models\Numero;
use Illuminate\Http\Request;

class NumerosController extends Controller
{
    public function index(){
        return view('index');
    }

    public function list(){
        return NumerosResource::collection(Numero::get());
    }

    // public function create(){
    //     return view('index');
    // }

    public function store(NumerosStore $request){
        $Numero = new Numero();
        $Numero->numero_string1 = $request->numero_string1;
        $Numero->numero_string2 = $request->numero_string2;
        $Numero->numero_float1 = $request->numero_float1;
        $Numero->numero_float2 = $request->numero_float2;
        $Numero->numero_int1 = $request->numero_int1;
        $Numero->numero_int2 = $request->numero_int2;
        $Numero->numero_double1 = $request->numero_double1;
        $Numero->numero_double2 = $request->numero_double2;
        $Numero->save();

        return view('index');
    }
}
