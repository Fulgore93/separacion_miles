@extends('layout')

@push('stylesheets')
   <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/23.1.3/css/dx.light.css">
@endpush

@section('content')
   <h1 class="text-xl mb-4">Ejemplo N°5</h1>
   <p class="mb-4">En este ejemplo, nos encargamos de montar lo necesario para inicializar la librería Devextreme.</p>
   <p class="mb-8">Debemos realizar ciertas configuraciones esenciales para el correcto funcionamiento del separador de miles y decimales, a la hora de editar o agregar registros nuevos bajo la misma librería.</p>
   <hr class="mb-10">

   <div class="flex flex-col gap-8">
      <div id="gridContainer" data-link="{{ route('list') }}"></div>
   </div>
@endsection

@push('scripts')
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://cdn3.devexpress.com/jslib/23.1.3/js/dx.all.js"></script>
   <script src="https://cdn3.devexpress.com/jslib/23.1.3/js/localization/dx.messages.es.js"></script>

   <script src="{{ asset('assets/devextreme.js') }}"></script>
@endpush
