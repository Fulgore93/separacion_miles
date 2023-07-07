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
   @yield('content')

   @stack('scripts')
   <script src="{{ asset('assets/imask.js') }}"></script>
   <script src="{{ asset('assets/scripts.js') }}"></script>
</body>

</html>
