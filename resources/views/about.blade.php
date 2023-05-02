<x-layout>
    <div class="-mt-10 mb-10">
        <div class="swiper">
            <div class="swiper-wrapper">
                
                @foreach ($posts as $post)
                
                    <div class="swiper-slide h-96">

                        <img src="{{ asset("storage/images/{$post->photo}") }}" alt="Your Image" class="w-full h-200 object-cover">

                    </div>
                @endforeach

            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>


    <div class="flex justify-center">
        <div class="inline-block bg-black rounded-tl-xl rounded-br-xl hover:underline transition ease-in duration-500
      ">
            <h1 class="text-4xl font-bold text-gray-400 text-center leading-tight p-4 select-none">
                <span class="text-white"> Nevermore Agency </span>
            </h1>
        </div>
    </div>

    <div class="flex justify-center mt-10 text-center">
        <div class="inline-block rounded-tl-xl rounded-br-xl transition ease-in duration-700
      ">
            <h1
                class="text-2xl bold font-bold text-black leading-relaxed p-4 hover:text-gray-800 select-none h-30 overflow-hidden">
                Marketing Agency creating <span class="hover:underline">visual language </span> <br>
                through photography and videography
            </h1>
        </div>
    </div>
</x-layout>