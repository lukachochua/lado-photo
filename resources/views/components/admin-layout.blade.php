<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doms Admin Panel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-full">
    <body class="h-full">
        <nav class="fixed h-screen w-1/5 bg-gray-800 flex border border-orange-500 flex-col justify-start items-center">
            <div class="flex flex-col space-y-4 mt-8">
                @guest
                <a href="{{ route('login')}}"
                    class="w-full border border-orange-400 px-6 py-3 text-sm font-medium text-white rounded-md bg-gray-500 hover:bg-gray-900">Log
                    in</a>
                @endguest
    
                @auth
                <a href="{{ route('posts.create')}}"
                    class="w-full border border-orange-400 px-6 py-3 text-sm font-medium text-white rounded-md {{ request()->routeIs('posts.create') ? 'bg-orange-400' : 'bg-gray-500 hover:bg-gray-900' }}">Create
                    Photo</a>
    
                <a href="/admin/posts/gallery"
                    class="w-full border border-orange-400 px-6 py-3 text-sm font-medium text-white rounded-md {{ request()->routeIs('posts.show') ? 'bg-orange-400' : 'bg-gray-500 hover:bg-gray-900' }}">Photo
                    Gallery</a>
    
                <a href="{{ route('admin.slider') }}"
                    class="w-full border border-orange-400 px-6 py-3 text-sm font-medium text-white rounded-md {{ request()->routeIs('admin.slider') ? 'bg-orange-400' : 'bg-gray-500 hover:bg-gray-900' }}">Create
                    Slider</a>
    
                <a href="{{ route('admin.slidergallery')}}"
                    class="w-full border border-orange-400 px-6 py-3 text-sm font-medium text-white rounded-md {{ request()->routeIs('admin.slidergallery') ? 'bg-orange-400' : 'bg-gray-500 hover:bg-gray-900' }}">Slider
                    Photos</a>
    
                <form action="{{ route('logout')}}" method="POST"
                    class="w-full border border-orange-400 px-6 py-3 text-sm font-medium text-white rounded-md bg-red-300 hover:bg-red-600">
                    @csrf
                    <button>Log Out</button>
                </form>
                @endauth
            </div>
        </nav>
    </body>
    </nav>

    <main class="flex items-center justify-center">
        <div class="w-4/5">
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </div>
    </main>
    </div>
    <x-flash />
</body>

</html>