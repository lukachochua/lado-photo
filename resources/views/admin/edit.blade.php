<x-admin-layout :post="$post">
    <div class="flex justify-center sm:ml-48 ml-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full mx-auto md:max-w-md">
            <div class="bg-orange-400 py-4 px-6">
                <h2 class="text-2xl font-bold text-white">Edit Photo</h2>
            </div>
            <form class="px-6 py-8" method="POST" action="{{ route('posts.update', $post) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2" for="description">
                        Photo description
                    </label>
                    <textarea
                        class="block appearance-none bg-gray-200 border border-gray-200 hover:border-gray-300 focus:border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none resize-none"
                        id="description" name="description" value="{{ old('description') }}" rows="3"></textarea>
                    @error('description')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-6 rounded-full shadow-lg focus:outline-none focus:shadow-outline">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>