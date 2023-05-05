<div class="-mt-10 mb-10">
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach ($posts as $post)
            <div class="swiper-slide h-96">
                <img src="{{ asset("storage/images/{$post->photo}") }}" alt="Your Image" class="w-full h-screen
                object-cover">
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>