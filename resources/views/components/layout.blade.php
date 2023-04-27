<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nevermore Agency</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/slideshow.js')}}"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-gray-800 text-white">

    <x-navbar :categories="$categories" />

    <main>
      <div class="bg-gray-200 min-h-screen pt-10 pb-6 overflow-hidden">

        {{ $slot }}

      </div>
    </main>
  </header>

  <x-footer />
</body>

</html>