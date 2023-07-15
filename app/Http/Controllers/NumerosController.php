<?php

namespace App\Http\Controllers;

use App\Http\Requests\NumerosStore;
use App\Http\Resources\NumerosResource;
use App\Models\Numero;

class NumerosController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function example2()
    {
        $numero = Numero::first();

        return view('example-2', compact('numero'));
    }

    public function example4()
    {
        $numeros = Numero::take(5)->latest()->get();

        return view('example-4', compact('numeros'));
    }

    public function list()
    {
        return NumerosResource::collection(Numero::get());
    }

    public function store(NumerosStore $request)
    {

        $Numero = new Numero();
        $Numero->numero_string1 = $request->numero_1;
        $Numero->numero_string2 = $request->numero_2;
        $Numero->numero_float1 = $request->numero_1;
        $Numero->numero_float2 = $request->numero_2;
        $Numero->numero_int1 = $request->numero_1;
        $Numero->numero_int2 = $request->numero_2;
        $Numero->numero_double1 = $request->numero_1;
        $Numero->numero_double2 = $request->numero_2;
        $Numero->save();

        return to_route('index');
    }
}
