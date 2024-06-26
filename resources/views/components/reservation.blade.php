<div id="reservation" class="container mx-auto px-4 h-screen flex flex-col justify-center">
    <div class="text-center">
        <h3 class="text-3xl font-bold mb-4">Reservation</h3>
        <p class="md:w-1/2 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatem placeat possimus, officiis earum</p>
    </div>

    <div class="grid md:grid-cols-2 gap-4 items-center">
        <form action="" method="post">
            @csrf
            <input type="text" placeholder="Name" name="name" class="border border-gray-300 p-2 rounded-lg w-full mb-3">
            <input type="number" placeholder="Phone" name="phone" class="border border-gray-300 p-2 rounded-lg w-full mb-3">
            <select name="service" class="border border-gray-300 p-2 rounded-lg w-full mb-3">
                <option value="">service 1</option>
                <option value="">service 2</option>
            </select>
            <input type="datetime-local" name="date" class="border border-gray-300 p-2 rounded-lg w-full mb-3">
            <button type="submit" class="bg-neutral-900 border-2 rounded w-full p-3 text-white">Submit</button>
        </form>
        <img src="{{ asset('images/reserv.svg') }}" class="w-3/4 hidden md:block mx-auto">
    </div>
</div>
