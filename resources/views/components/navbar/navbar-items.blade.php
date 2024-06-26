<div class="hidden md:flex gap-4 items-center">
    <a href="/#hero" class="p-2 rounded">Home</a>
    <a href="/#services" class="p-2 rounded">Services</a>
    <a href="/#review" class="p-2 rounded">Review</a>
    <a href="/#reservation" class="p-2 rounded">Reservation</a>

    @auth
    <a href="/admin" class="p-2 rounded bg-neutral-900 text-white font-medium">Dashboard</a>
    @else
    <a href="/login" class="py-2 px-4 rounded bg-neutral-900 text-white font-medium">Login</a>
    <a href="/register" class="py-2 px-4 rounded">Register</a>
    @endauth
</div>
<div class="block md:hidden">
    <button class="text-2xl p-4 rounded" id="btn-open-sidebar"><i class="bi bi-list"></i></button>
</div>

{{-- SIDENAV --}}
<div class="bg-[#F1F1EF] p-6 flex flex-col items-start gap-3 absolute -right-full md:hidden top-0 border" id="sidebar">
    <button id="btn-close-sidebar" class="py6-4 rounded"><i class="bi bi-x-lg"></i></button>
    <a href="/" class="p-2 rounded">Home</a>
    <a href="#services" class="p-2 rounded">Services</a>
    <a href="#review" class="p-2 rounded">Review</a>
    <a href="#reservation" class="p-2 rounded">Reservation</a>
    <a href="/login" class="py-2 px-4 rounded bg-neutral-900 text-white font-medium">Login</a>
    <a href="/register" class="py-2 px-4 rounded">Register</a>
</div>
