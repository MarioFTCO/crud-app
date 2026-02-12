
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>200 OK</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-----------------------------------------------------------
-- animate.min.css by Daniel Eden (https://animate.style)
-- is required for the animation of notifications and slide out panels
-- you can ignore this step if you already have this file in your project
--------------------------------------------------------------------------->

  <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
 <x-navbar/>
  <x-alert type="info">
    <x-slot name="title">Prueba alerta</x-slot>
    <x-slot name="message">Prueba comoponentes modificables</x-slot>
  </x-alert>
  <div class="flex flex-col items-center">
    <x-bladewind::button>Prueba btn </x-bladewind::button>
  </div>
  <div class="flex flex-col items-center mt-4">
    <h2 class="font-semibold text-2xl">Prueba POO laravel/php </h2>
    <form action="{{ route('scan') }}" method="POST" class="bg-gray-100 border border-gray-200 rounded-lg p-6 m-4 flex flex-col items-start">
      @csrf
      <p class="text-gray-800 font-semibold pb-2  ">ingrese un numero</p>
      <input type="number" name="num1" id="num1" placeholder="0" class="border border-gray-300 rounded-md p-2 mb-4">
  
      <p class="text-gray-800 font-semibold pb-2  ">ingrese otro numero</p>
      <input type="number" name="num2" id="num2" placeholder="0" class="border border-gray-300 rounded-md p-2 mb-4">
  
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="sumar($num1, $num2)">Sumar</button>
  
      <p class="m-4" type="¨result">{{$result}}</p>
    </form>
  </div>
</body>

</html>