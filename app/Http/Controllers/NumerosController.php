<?php

namespace App\Http\Controllers;

use App\Http\Requests\NumerosStore;
use App\Http\Requests\NumerosStoreTabla;
use App\Http\Requests\NumerosUpdateTabla;
use App\Http\Resources\NumerosResource;
use App\Models\Numero;
use Illuminate\Http\Request;

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

    public function tableStore(NumerosStoreTabla $request)
    {
        $Numero = new Numero();
        $Numero->numero_string1 = $request->exists('numero_string1') ? $request->numero_string1 : 0;
        $Numero->numero_string2 = $request->exists('numero_string2') ? $request->numero_string2 : 0;
        $Numero->numero_float1 = $request->exists('numero_float1') ? $request->numero_float1 : 0;
        $Numero->numero_float2 = $request->exists('numero_float2') ? $request->numero_float2 : 0;
        $Numero->numero_int1 = $request->exists('numero_int1') ? $request->numero_int1 : 0;
        $Numero->numero_int2 = $request->exists('numero_int2') ? $request->numero_int2 : 0;
        $Numero->numero_double1 = $request->exists('numero_double1') ? $request->numero_double1 : 0;
        $Numero->numero_double2 = $request->exists('numero_double2') ? $request->numero_double2 : 0;
        $Numero->save();
    }

    public function tableUpdate(NumerosUpdateTabla $request)
    {
        $Numero = Numero::findOrFail($request->id);
        $Numero->numero_string1 = $request->exists('numero_string1') ? $request->numero_string1 : $Numero->numero_string1;
        $Numero->numero_string2 = $request->exists('numero_string2') ? $request->numero_string2 : $Numero->numero_string2;
        $Numero->numero_float1 = $request->exists('numero_float1') ? $request->numero_float1 : $Numero->numero_float1;
        $Numero->numero_float2 = $request->exists('numero_float2') ? $request->numero_float2 : $Numero->numero_float2;
        $Numero->numero_int1 = $request->exists('numero_int1') ? $request->numero_int1 : $Numero->numero_int1;
        $Numero->numero_int2 = $request->exists('numero_int2') ? $request->numero_int2 : $Numero->numero_int2;
        $Numero->numero_double1 = $request->exists('numero_double1') ? $request->numero_double1 : $Numero->numero_double1;
        $Numero->numero_double2 = $request->exists('numero_double2') ? $request->numero_double2 : $Numero->numero_double2;
        $Numero->save();
    }

    public function tableDelete(Request $request)
    {
        Numero::findOrFail($request->id)->delete();
    }
}
