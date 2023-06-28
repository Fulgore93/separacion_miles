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

<body class="container mx-auto mt-8">
   <h1 class="text-xl mb-4">Separador de miles</h1>

   <div class="grid gap-2 max-w-xl">
      <input class="border border-dark px-2 py-1 focus:outline-none input-mask" data-thousands-separator='.' data-decimal-separator=',' type="text" name="">
      <input class="border border-dark px-2 py-1 focus:outline-none input-mask" data-thousands-separator='.' data-decimal-separator=',' type="text" name="">
      <input class="border border-dark px-2 py-1 focus:outline-none input-mask" data-thousands-separator='.' data-decimal-separator=',' type="text" name="">
      <input class="border border-dark px-2 py-1 focus:outline-none input-mask" data-thousands-separator='.' data-decimal-separator=',' type="text" name="">
   </div>

   <script src="{{ asset('assets/imask.js') }}"></script>
   <script src="{{ asset('assets/scripts.js') }}"></script>
</body>

</html>
