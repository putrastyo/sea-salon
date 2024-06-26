<section id="review" class="md:h-screen px-4 py-10 md:py-0 bg-[#e0e0d9]">
    <div class="container mx-auto flex flex-col justify-center h-full gap-12">
        <div class="text-center">
            <h1 class="text-5xl font-bold">What people say about SEA SALON?</h1>
        </div>

        <div class="grid md:grid-cols-3 gap-4">
            @foreach ($reviews as $review)
            <div class="bg-white px-6 py-8 h-80 rounded-lg">
                <div class="mb-3">
                    <div class="flex gap-2">
                        @for ($i = 0; $i < $review->rating; $i++)
                        <i class="bi bi-star-fill"></i>
                        @endfor
                    </div>
                    <small>~ {{$review->user->fullname}}</small>
                </div>
                <p>{{$review->comment}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
