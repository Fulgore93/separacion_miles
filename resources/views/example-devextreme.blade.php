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

   <!-- DevExtreme library -->
   <script type="text/javascript" src="https://cdn3.devexpress.com/jslib/23.1.3/js/dx.all.js"></script>

   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

   <div class="container flex mx-auto">
      <div id="gridContainer"></div>
   </div>

   <script src="{{ asset('assets/imask.js') }}"></script>
   <script src="{{ asset('assets/scripts.js') }}"></script>
   <script src="{{ asset('assets/devextreme.js') }}"></script>
</body>

</html>
