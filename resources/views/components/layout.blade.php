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

    <x-navbar :categories="$categories" />

    <main>
      <div class="bg-gray-200 min-h-screen pt-10 pb-6 overflow-hidden">
        <div class="max-w-screen-lg mx-auto grid gap-4 grid-cols-1 sm:grid-cols-3">
          {{ $slot }}
        </div>
      </div>
    </main>
    
  </header>

  <x-footer />
</body>

</html>