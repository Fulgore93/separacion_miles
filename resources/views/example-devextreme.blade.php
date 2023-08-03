<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>

   <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <!-- DevExtreme theme -->
   <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/23.1.3/css/dx.light.css">

   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

   <div class="container flex mx-auto">
      <div id="gridContainer"></div>
   </div>

   <!-- DevExtreme library -->
   <script src="https://cdn3.devexpress.com/jslib/23.1.3/js/dx.all.js"></script>

   <script src="https://cdn3.devexpress.com/jslib/23.1.3/js/localization/dx.messages.es.js"></script>

   <script src="{{ asset('assets/separador-miles/imask.js') }}"></script>
   <script src="{{ asset('assets/separador-miles/script.js') }}"></script>
   <script src="{{ asset('assets/devextreme.js') }}"></script>
</body>

</html>
