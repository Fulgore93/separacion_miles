@extends('layout')
@section('content')
   <h1 class="text-xl mb-4">Ejemplo N°2</h1>
   <p class="mb-4">La informacion llega desde la base de datos y se renderiza directo en la vista.</p>
   <hr class="mb-10">

   <form action="{{ route('store') }}" method="POST" class="grid gap-5 w-full content-input">
      <div class="flex flex-col shadow-md rounded-lg p-5">
         <label class="mb-2" for="">Input / miles '.' y decimal ','</label>
         <input class="border border-dark px-2 py-1 focus:outline-none input-mask mask-1" value="{{ $numero->numero_double1 }}" data-input-value='.numero-1' data-thousands-separator='.' data-decimal-separator=',' type="text">
         <div class="my-2">
            <label for="" class="block text-gray-400 italic">Salida</label>
            <input type="text" class="border border-dark px-2 py-1 focus:outline-none w-full numero-1" value="{{ $numero->numero_double1 }}" name="numero_1" readonly>
         </div>
      </div>

      <div class="flex flex-col shadow-md rounded-lg p-5">
         <label class="mb-2" for="">Input / miles ',' y decimal '.'</label>
         <input class="border border-dark px-2 py-1 focus:outline-none input-mask mask-2" value="{{ $numero->numero_double1 }}" data-input-value='.numero-2' data-thousands-separator=',' data-decimal-separator='.' type="text">
         <div class="my-2">
            <label for="" class="block text-gray-400 italic">Salida</label>
            <input type="text" class="border border-dark px-2 py-1 focus:outline-none w-full numero-2" value="{{ $numero->numero_double1 }}" name="numero_2" readonly>
         </div>
      </div>
   </form>
@endsection
