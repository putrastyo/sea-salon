<nav class="flex justify-end items-center gap-4 border-b p-4">
    <h6 class="text-lg font-bold underline">{{ auth()->user()->fullname }}</h6>
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button class="py-2 px-4 rounded bg-neutral-900 text-white font-medium">Logout</button>
    </form>
</nav>
