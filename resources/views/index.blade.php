<!DOCTYPE html>
<html lang="en">
@extends('layout')
@section('content')
   <h1 class="text-xl mb-4">Ejemplo N°1</h1>
   <p class="mb-4">Los campos se van formateando a medida que el usuario va escribiendo, el guardado de esta misma informacion es directa en la DB, ya que al enviar los valores al backend, estos llegan de forma limpia.</p>
   <p class="mb-4">Gracias a esto, es facil validar la informacion en algun FormRequest.</p>
   <hr class="mb-10">

   <form action="{{ route('store') }}" method="POST" class="grid gap-5 w-full content-input">

      <div class="flex flex-col border border-primary rounded-lg p-5">
         <label class="mb-2" for="">Input / miles '.' y decimal ','</label>
         <input class="border border-dark px-2 py-1 focus:outline-none input-mask mask-1" value="{{ old('numero_1') }}" data-input-value='.numero-1' data-thousands-separator='.' data-decimal-separator=',' type="text">
         <div class="my-2">
            <label for="" class="block text-gray-400 italic">Salida</label>
            <input type="text" class="border border-dark px-2 py-1 focus:outline-none w-full numero-1" value="{{ old('numero_1') }}" name="numero_1" readonly>
         </div>
      </div>

      <div class="flex flex-col border border-primary rounded-lg p-5">
         <label class="mb-2" for="">Input / miles ',' y decimal '.'</label>
         <input class="border border-dark px-2 py-1 focus:outline-none input-mask mask-2" value="{{ old('numero_2') }}" data-input-value='.numero-2' data-thousands-separator=',' data-decimal-separator='.' type="text">
         <div class="my-2">
            <label for="" class="block text-gray-400 italic">Salida</label>
            <input type="text" class="border border-dark px-2 py-1 focus:outline-none w-full numero-2" value="{{ old('numero_2') }}" name="numero_2" readonly>
         </div>
      </div>
      <button class="mr-auto px-3 py-2 border border-primary rounded-lg transition-all duration-300 hover:shadow-lg hover:bg-gray-300">Guardar</button>
      @csrf
      @dump($errors->all())
   @endsection
