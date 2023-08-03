<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <script src="https://cdn.tailwindcss.com"></script>
   @stack('stylesheets')
</head>

<body class="container px-3 md:px-0 mx-auto my-10">
   <div class="flex flex-col lg:flex-row gap-8">
      <div class="lg:w-60 rounded-lg p-4 shadow-md">
         <h3 class="border-b border-primary pb-1 mb-4">MaskJS</h3>
         <div class="flex flex-col gap-3">
            <a href="{{ route('example.1') }}" class="w-full transition-all duration-300 bg-gray-200 hover:bg-gray-300 rounded-md px-3 py-2 text-sm">
               1 - Guardar valores 
            </a>
            <a href="{{ route('example.2') }}" class="w-full transition-all duration-300 bg-gray-200 hover:bg-gray-300 rounded-md px-3 py-2 text-sm">
               2 - Setear input
            </a>
            <a href="{{ route('example.3') }}" class="w-full transition-all duration-300 bg-gray-200 hover:bg-gray-300 rounded-md px-3 py-2 text-sm">
               3 - Manipular valores
            </a>
            <a href="{{ route('example.4') }}" class="w-full transition-all duration-300 bg-gray-200 hover:bg-gray-300 rounded-md px-3 py-2 text-sm">
               4 - Visualización
            </a>
         </div>
         <h3 class="border-b border-primary pb-1 mb-4 my-6">Devextreme</h3>
         <div class="flex flex-col gap-3">
            <a href="{{ route('example.5') }}" class="w-full transition-all duration-300 bg-gray-200 hover:bg-gray-300 rounded-md px-3 py-2 text-sm">
               5 - Input con formato
            </a>
         </div>
      </div>
      <div class="flex-1">
         @yield('content')
      </div>
   </div>

   @stack('scripts')
   <script src="{{ asset('assets/separador-miles/imask.js') }}"></script>
   <script src="{{ asset('assets/separador-miles/script.js') }}"></script>
</body>

</html>
