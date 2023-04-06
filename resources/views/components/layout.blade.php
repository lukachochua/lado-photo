<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/script.js') }}"></script>

</head>

<body>
  <header class="bg-gray-900 text-gray-100">
    <nav class="flex justify-between items-center py-4 px-6">
      <div>
        <a href="#" class="font-bold text-lg">Logo</a>
      </div>
      <div>
        <a href="#" class="py-2 px-4 text-gray-100 hover:bg-gray-700 rounded" onmouseover="showCategories()"
          onmouseout="hideCategories()">
          Photos
        </a>

        <div id="categories" class="hidden absolute bg-gray-800 text-gray-100 w-auto py-2 mt-1 rounded-md z-10"
          onmouseover="showCategories()" onmouseout="hideCategories()">
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Personal</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Food</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Other</a>
        </div>
        <a href="#" class="py-2 px-4 text-gray-100 hover:bg-gray-700 rounded">About</a>
        <a href="#" class="py-2 px-4 text-gray-100 hover:bg-gray-700 rounded">Contact</a>
      </div>
    </nav>

    {{ $slot }}
  </header>

</body>

</html>