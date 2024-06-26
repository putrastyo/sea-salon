<aside class="bg-[#F1F1EF] h-full border-2 p-4 w-60">
    <a href="/">
        <h5 class="text-xl font-bold text-center">SEA Salon</h5>
    </a>

    <nav class="mt-6">
        <ul class="flex flex-col">
            <li><a href="{{route('reservation.index')}}" class="flex items-center gap-3 p-2 rounded {{ request()->is('reservation*') ? 'bg-gray-300' : 'hover:bg-slate-200'}}"><i class="bi bi-calendar"></i> Reservation</a></li>
            @if (auth()->user()->role == 'admin')
            <li><a href="{{route('services.index')}}" class="flex items-center gap-3 p-2 rounded {{ request()->is('admin/services*') ? 'bg-gray-300' : 'hover:bg-slate-200'}}"><i class="bi bi-wrench"></i> Services</a></li>
            <li><a href="{{route('branches.index')}}" class="flex items-center gap-3 p-2 rounded {{ request()->is('admin/branches*') ? 'bg-gray-300' : 'hover:bg-slate-200'}}"><i class="bi bi-geo"></i> Branches</a></li>
            @else
            <li><a href="{{route('reviews.index')}}" class="flex items-center gap-3 p-2 rounded {{ request()->is('customer/reviews*') ? 'bg-gray-300' : 'hover:bg-slate-200'}}"><i class="bi bi-star"></i> Reviews</a></li>
            @endif
        </ul>
    </nav>
</aside>
