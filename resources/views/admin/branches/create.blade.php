@extends('layouts.dashboard')
@section('title', 'Create Branch')
@section('content')
<h3 class="text-xl font-bold mb-3">@yield('title')</h3>
<a href="{{route('branches.index')}}" class="bg-neutral-900 text-white py-2 px-4 rounded">Back</a>

<div class="mt-6">
    <form action="{{route('branches.store')}}" method="post">
        @csrf
        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <div class="mb-3">
                    <label class="block mb-2">Name</label>
                    <input type="text" name="name" class="border border-gray-300 p-2 rounded w-full" placeholder="Branch name">
                    @error('name')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="block mb-2">Location</label>
                    <input type="text" name="location" class="border border-gray-300 p-2 rounded w-full" placeholder="location">
                    @error('location')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="block mb-2">Open Hour</label>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block mb-2 text-sm font-semibold">From</label>
                            <input type="time" name="open_hour" class="border border-gray-300 p-2 rounded w-full">
                            @error('open_hour')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-semibold">To</label>
                            <input type="time" name="close_hour" class="border border-gray-300 p-2 rounded w-full">
                            @error('close_hour')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="mb-3">
                    <label class="block mb-2">Services</label>
                    <div class="grid grid-cols-2">
                        @foreach ($services as $service)
                        <label>
                            <input type="checkbox" name="services[]" value="{{$service->id}}">
                            {{$service->name}} ({{$service->duration}}m)
                        </label>
                        @endforeach
                    </div>
                    @error('services')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="w-full py-2 px-4 rounded bg-neutral-900 text-white font-medium">Submit</button>
    </form>
</div>
@endsection
