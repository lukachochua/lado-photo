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

<body class="bg-gray-100">
  <header class="bg-gray-500 text-white">
    <nav class="flex justify-between items-center py-4 px-6">
      <div>
        <a href="/" class="font-bold font-serif text-lg hover:bg-gray-700 px-4 py-2 rounded">Home</a>
      </div>
      <div>
        <a href="#" class="py-2 px-4 text-white font-bold hover:bg-gray-600 rounded-lg relative" onmouseover="showCategories()"
          onmouseout="hideCategories()">
          Photos 
        </a>
        <div id="categories" class="hidden absolute bg-gray-500 text-white w-auto py-2 mt-1 rounded-md z-10"
          onmouseover="showCategories()" onmouseout="hideCategories()">
          @foreach ($categories as $category)
          <a 
            href="{{ route('categories.show', ['category' => $category->id]) }}"
            class="block px-4 py-2 text-gray-300 hover:bg-gray-600 hover:text-white font-bold focus:bg-gray-700
            focus:text-white rounded-md transition-colors duration-300">
            {{ $category->name }}
          </a>
          @endforeach
        </div>
        <a href="#" class="py-2 px-4 text-white font-bold hover:bg-gray-700 rounded-lg">About</a>
        <a href="#" class="py-2 px-4 text-white font-bold hover:bg-gray-700 rounded-lg">Contact</a>
      </div>
    </nav>
    <div class="bg-gray-200 min-h-screen pt-10 pb-6 overflow-hidden">
      <div class="max-w-screen-lg mx-auto grid gap-4 grid-cols-1 sm:grid-cols-2">
        {{ $slot }}
      </div>
    </div>
  </header>
</body>

</html>