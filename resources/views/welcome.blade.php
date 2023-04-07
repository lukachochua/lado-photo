<x-layout :categories="$categories">
    <div class="bg-gray-600 min-h-screen pt-10 pb-6 overflow-hidden">
        <div class="max-w-screen-lg mx-auto grid gap-4 grid-cols-1 sm:grid-cols-2">
            @foreach ($posts as $post)
            <div class="bg-gray-600 shadow overflow-hidden block">
                <div class="w-full h-full">
                    <img src="{{ asset("storage/images/{$post->photo}") }}" alt="Your Image" class="w-full h-full object-cover">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>