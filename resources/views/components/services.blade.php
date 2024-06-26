<section id="services" class="container mx-auto px-4 h-screen flex flex-col justify-center gap-10">
    <div class="text-center">
        <h3 class="text-3xl font-bold mb-4">Services</h3>
        <p class="md:w-1/2 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatem placeat possimus, officiis earum</p>
    </div>
    <div class="grid md:grid-cols-3 gap-4">
        @foreach ($services as $service)
        <div class="bg-[#F1F1EF] border-2 rounded-xl p-6">
            <h3 class="text-2xl font-bold mb-3">{{$service->name}}</h3>
            <p>
                <i class="bi bi-alarm"></i>
                {{$service->duration}} minutes
            </p>
        </div>
        @endforeach
    </div>
</section>
