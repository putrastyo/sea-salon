@extends('layouts.dashboard')
@section('title', 'create services')
@section('content')
<h3 class="text-xl font-bold mb-3">@yield('title')</h3>
<a href="{{route('services.index')}}" class="bg-neutral-900 text-white py-2 px-4 rounded">Back</a>

<div class="md:w-1/2 mt-6">
    <form action="{{route('services.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" class="border border-gray-300 p-2 rounded w-full" placeholder="Service name">
            @error('name')
                <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="block mb-2">Duration</label>
            <input type="number" name="duration" class="border border-gray-300 p-2 rounded w-full" placeholder="duration (in minute)">
            @error('duration')
                <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="w-full py-2 px-4 rounded bg-neutral-900 text-white font-medium">Submit</button>
    </form>
</div>
@endsection
