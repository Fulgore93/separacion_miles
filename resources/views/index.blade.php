<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="container px-3 md:px-0 mx-auto mt-8">
   <h1 class="text-xl mb-4">Separador de miles</h1>

   <div class="grid gap-2 max-w-xl content-input">
      <div class="flex flex-col">
         <label class="mb-2" for="">Input numerico</label>
         <input class="border border-dark px-2 py-1 focus:outline-none" type="number">
      </div>
      <div class="flex flex-col">
         <label class="mb-2" for="">Input / miles '.' y decimal ','</label>
         <input class="border border-dark px-2 py-1 focus:outline-none input-mask" data-input-value='.numero-1' data-thousands-separator='.' data-decimal-separator=',' type="text">
         <input type="hidden" class="numero-1" name="numero-1">
      </div>
      <div class="flex flex-col">
         <label class="mb-2" for="">Input / miles ',' y decimal '.'</label>
         <input class="border border-dark px-2 py-1 focus:outline-none input-mask" data-input-value='.numero-2' data-thousands-separator=',' data-decimal-separator='.' type="text">
         <input type="hidden" class="numero-2" name="numero-2">
      </div>
      <div class="flex flex-col custom-input">
         <label class="mb-2" for="">Input / miles ',' y decimal '.' / creado desde javascript</label>
         {{-- <input type="hidden" class="numero-3" name="numero-3"> --}}
      </div>
   </div>

   <script src="{{ asset('assets/imask.js') }}"></script>
   <script src="{{ asset('assets/scripts.js') }}"></script>
</body>

</html>
