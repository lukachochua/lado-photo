<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nevermore Agency</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/script.js') }}"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-gray-800 text-white">
    <nav class="flex justify-between items-center py-4 px-6 font-sans">
      <div>
        <a href="/" class="py-2 px-4 text-white font-bold hover:text-gray-500 rounded-lg relative transition duration-400 ease-in-out text-lg">HOME</a>
      </div>
      <div>
        <a href="/" class="py-2 px-4 text-white font-bold hover:text-gray-500 rounded-lg relative transition duration-400 ease-in-out text-lg border-r-2 border-gray-600"
          onmouseover="showCategories()" onmouseout="hideCategories()">
          PHOTOS
        </a>
        <div id="categories" class="hidden absolute bg-gray-800 text-white w-auto py-2 mt-1 rounded-md z-10"
          onmouseover="showCategories()" onmouseout="hideCategories()">
          @foreach ($categories as $category)
          <a href="{{ route('categories.show', ['category' => $category->id]) }}" class="block py-2 px-4 text-white font-bold hover:text-gray-600 rounded-lg relative transition duration-400 ease-in-out">
            {{ strtoupper($category->name) }}
          </a>
          @endforeach
        </div>
        <a href="#" class="py-2 px-4 text-white font-bold hover:text-gray-600 rounded-lg relative transition duration-400 ease-in-out text-lg border-r-2 border-gray-600">VIDEOS</a>
        <a href="#" class="py-2 px-4 text-white font-bold hover:text-gray-600 rounded-lg relative transition duration-400 ease-in-out text-lg border-r-2 border-gray-600">ABOUT</a>
        <a href="#" class="py-2 px-4 text-white font-bold hover:text-gray-600 rounded-lg relative transition duration-400 ease-in-out text-lg border-r-2 border-gray-600">CONTACT</a>
      </div>
    </nav>

    <main>
      <div class="bg-gray-200 min-h-screen pt-10 pb-6 overflow-hidden">
        <div class="max-w-screen-lg mx-auto grid gap-4 grid-cols-1 sm:grid-cols-3">
          {{ $slot }}
        </div>
      </div>
    </main>
  </header>

  <footer class="flex justify-between items-center bg-gray-800 text-white py-4 px-6">
    <div class="text-sm">Built by &copy;Luka Chochua</div>
    <div class="text-sm">Owned by &copy;Lado Kobakhidze</div>
  </footer>
</body>

</html>