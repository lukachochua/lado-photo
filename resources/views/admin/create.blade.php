<x-admin-layout :categories="$categories">

    
    <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full mx-auto md:max-w-md">
        <div class="bg-green-500 py-4 px-6">
            <h2 class="text-2xl font-bold text-white">Upload Photo</h2>
        </div>
        <form class="px-6 py-8" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="photo">
                    Upload photo
                </label>
                <div class="relative">
                    <input
                        class="block appearance-none bg-gray-200 border border-gray-200 hover:border-gray-300 focus:border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none"
                        id="photo" name="photo" value="{{ old('photo') }}" type="file" accept="image/*">
                    <div class="absolute inset-y-0 right-0 flex items-center">
                        <span class="bg-gray-300 text-gray-600 px-2 py-1 rounded-l-none rounded-r-md">JPEG, PNG, JPG</span>
                    </div>
                </div>
                @error('photo')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="category">
                    Choose Category
                </label>
                <select
                    class="block appearance-none bg-gray-200 border border-gray-200 hover:border-gray-300 focus:border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none"
                    id="category" name="category_id" value="{{ old('category') }}" type="file">
                    <option value="" disabled selected>Select a category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
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
                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full shadow-lg focus:outline-none focus:shadow-outline">
                    Upload
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>