<x-layout :categories="$categories">
        <div class="bg-gray-600 min-h-screen pt-10 pb-6">
            <div class="max-w-screen-lg mx-auto grid gap-4 grid-cols-1 sm:grid-cols-2">
                @foreach ($posts as $post)
                <div class="bg-white shadow overflow-hidden">
                    <img src="{{ asset("storage/images/{$post->photo}") }}" alt="Your Image" class="w-full">
                </div>
                @endforeach
            </div>
        </div>
</x-layout>