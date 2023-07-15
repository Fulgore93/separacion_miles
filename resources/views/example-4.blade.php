@extends('layout')
@section('content')
   <h1 class="text-xl mb-4">Ejemplo N°4</h1>
   <p class="mb-4">Listado con últimos 5 registros, los datos fueron renderizados directo en la pantalla, no pasaron por algún Accessor o Mutator, pero si usamos una función de PHP, la cual se encarga de procesar el valor, seteando un separador de miles y decimal con el único objetivo de facilitar la visualización del numero al usuario final.</p>
   <p class="mb-8">En dado caso que se requiera hacer un cálculo matemático, es posible hacer esto tanto a nivel de DB, PHP (Back), o JS (Front), ya que el valor viene limpio desde la Base de datos.</p>
   <p class="mb-4">
      String <span class="text-gray-400 text-xs">(Tipo)</span> :
      10000.55 <span class="text-gray-400 text-xs">(Valor DB)</span> ->
      10.000,55 <span class="text-gray-400 text-xs">(Formateado)</span>
   </p>
   <hr class="mb-10">

   <div class="flex flex-col gap-8">
      @foreach ($numeros as $numero)
         <div class="rounded-lg shadow-md p-5 text-sm relative">
            <span class="text-xs bg-gray-300 text-gray-500 shadow-md rounded-full flex items-center justify-center center absolute -top-2 left-2 w-6 h-6">{{ $numero->id }}</span>
            {{-- <p>Registro N°1</p> --}}
            <small class="text-xs italic text-gray-500">Formato: miles '.' y decimal ','</small>
            <div class="flex flex-wrap gap-y-2 gap-x-3 mt-2">
               <div class="flex">
                  <span>String:</span>
                  <div class="flex items-center gap-1 font-bold text-gray-500">
                     <span class="ml-1">{{ $numero->numero_string2 }} </span>
                     <span class="text-xs font-light">-></span>
                     <span>{{ number_format($numero->numero_string2, 2, ',', '.') }}</span>
                  </div>
               </div>
               <div class="flex">
                  <span>Float:</span>
                  <div class="flex items-center gap-1 font-bold text-gray-500">
                     <span class="ml-1">{{ $numero->numero_float1 }} </span>
                     <span class="text-xs font-light">-></span>
                     <span>{{ number_format($numero->numero_float1, 2, ',', '.') }}</span>
                  </div>
               </div>
               <div class="flex">
                  <span>Integer:</span>
                  <div class="flex items-center gap-1 font-bold text-gray-500">
                     <span class="ml-1">{{ $numero->numero_int1 }} </span>
                     <span class="text-xs font-light">-></span>
                     <span>{{ number_format($numero->numero_int1, 2, ',', '.') }}</span>
                  </div>
               </div>
               <div class="flex">
                  <span>Double:</span>
                  <div class="flex items-center gap-1 font-bold text-gray-500">
                     <span class="ml-1">{{ $numero->numero_double1 }} </span>
                     <span class="text-xs font-light">-></span>
                     <span>{{ number_format($numero->numero_double1, 2, ',', '.') }}</span>
                  </div>
               </div>
            </div>
            <hr class="mb-2 mt-3">
            <small class="text-xs italic text-gray-500">Formato: miles ',' y decimal '.'</small>
            <div class="flex flex-wrap gap-y-2 gap-x-3 mt-2">
               <div class="flex">
                  <span>String:</span>
                  <div class="flex items-center gap-1 font-bold text-gray-500">
                     <span class="ml-1">{{ $numero->numero_string2 }} </span>
                     <span class="text-xs font-light">-></span>
                     <span>{{ number_format($numero->numero_string2, 2, ',', '.') }}</span>
                  </div>
               </div>
               <div class="flex">
                  <span>Float:</span>
                  <div class="flex items-center gap-1 font-bold text-gray-500">
                     <span class="ml-1">{{ $numero->numero_float2 }} </span>
                     <span class="text-xs font-light">-></span>
                     <span>{{ number_format($numero->numero_float2, 2, ',', '.') }}</span>
                  </div>
               </div>
               <div class="flex">
                  <span>Integer:</span>
                  <div class="flex items-center gap-1 font-bold text-gray-500">
                     <span class="ml-1">{{ $numero->numero_int2 }} </span>
                     <span class="text-xs font-light">-></span>
                     <span>{{ number_format($numero->numero_int2, 2, ',', '.') }}</span>
                  </div>
               </div>
               <div class="flex">
                  <span>Double:</span>
                  <div class="flex items-center gap-1 font-bold text-gray-500">
                     <span class="ml-1">{{ $numero->numero_double2 }} </span>
                     <span class="text-xs font-light">-></span>
                     <span>{{ number_format($numero->numero_double2, 2, ',', '.') }}</span>
                  </div>
               </div>
            </div>
         </div>
      @endforeach
   </div>
@endsection
