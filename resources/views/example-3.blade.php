@extends('layout')
@section('content')
   <h1 class="text-xl mb-4">Ejemplo N°3</h1>
   <p class="mb-4">Dependiendo del numero que ingreses en el primer input, el segundo se va ajustando al valor correspondiente, en este caso es el valor de input-1 * 2.</p>
   <p class="mb-4">Cada uno de los input, son declarados de forma independiente, gracias a esto, tenemos mas flexibilidad para validar la informacion.</p>
   <hr class="mb-10">
   <form action="{{ route('store') }}" method="POST" class="grid gap-5 w-full content-input">
      <div class="flex flex-col shadow-md rounded-lg p-5">
         <label class="mb-2" for="">Input / miles '.' y decimal ','</label>
         <input class="border border-dark px-2 py-1 focus:outline-none input-calculator" data-input-value='.numero-1' data-thousands-separator='.' data-decimal-separator=',' type="text">
         <div class="my-2">
            <label for="" class="block text-gray-400 italic">Salida</label>
            <input type="text" class="border border-dark px-2 py-1 focus:outline-none w-full numero-1" name="numero_1" readonly>
         </div>
      </div>

      <div class="flex flex-col shadow-md rounded-lg p-5">
         <label class="mb-2" for="">Input / miles ',' y decimal '.'</label>
         <input class="border border-dark px-2 py-1 focus:outline-none input-result" data-input-value='.numero-2' data-thousands-separator=',' data-decimal-separator='.' type="text">
         <div class="my-2">
            <label for="" class="block text-gray-400 italic">Salida</label>
            <input type="text" class="border border-dark px-2 py-1 focus:outline-none w-full numero-2" name="numero_2" readonly>
         </div>
      </div>
   </form>
@endsection

@push('scripts')
   <script src="{{ asset('assets/example-3.js') }}"></script>
@endpush
