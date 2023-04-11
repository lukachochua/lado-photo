<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">

                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/admin"
                                    class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-gray-700">Dashboard</a>
                                @guest
                                <a href="/login"
                                    class="px-3 py-2 text-sm font-medium text-green-500 rounded-md hover:bg-green-500 hover:text-white">Log
                                    in</a>
                                @endguest

                                @auth
                                <a href="/admin/posts/create"
                                    class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-gray-700">Create
                                    Post</a>
                                <a href="/admin/gallery"
                                    class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-gray-700">Photo
                                    Gallery</a>
                                <form action="/logout" method="POST"
                                    class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-red-700">
                                    @csrf
                                    <button>Log Out</button>
                                </form>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            <div class="mx-auto flex items-center justify-center max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
    <x-flash />
</body>

</html>