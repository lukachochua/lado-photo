<x-admin-layout>
    <div class="flex">
        <div class="sm:ml-48 ml-12 w-full flex items-left justify-center"> <!-- Content Area -->
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap -mx-4">
                    @foreach ($sliders as $slider)
                    <div class="w-full md:w-1/3 px-4 mb-8 flex-grow">
                        <img src="{{ asset("storage/slider/{$slider->photo}") }}" alt="" class="w-full h-[300px] object-cover">

                        <form action="{{ route('slider.destroy', $slider) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="mt-1 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</x-admin-layout>