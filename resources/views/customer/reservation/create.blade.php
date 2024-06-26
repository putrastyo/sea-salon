@extends('layouts.dashboard')
@section('title', 'Create Reservation')
@section('content')
<h3 class="text-xl font-bold mb-3">@yield('title')</h3>
<a href="{{route('reservation.index')}}" class="bg-neutral-900 text-white py-2 px-4 rounded">Back</a>

<div class="mt-6">
    <form action="{{route('reservation.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="block mb-2 text-sm font-semibold">Name</label>
            <input type="text" name="name" class="border border-gray-300 p-2 rounded w-full" value="{{auth()->user()->fullname}}" readonly>
            @error('name')
                <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-semibold">Phone</label>
            <input type="number" name="phone" class="border border-gray-300 p-2 rounded w-full" value="{{auth()->user()->phone}}">
            @error('phone')
                <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-semibold">Branch</label>
            <select name="branch_id" class="border border-gray-300 p-2 rounded w-full">
                @foreach ($branches as $branch)
                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                @endforeach
            </select>
            @error('branch_id')
                <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-semibold">Service</label>
            <div class="flex gap-3 flex-wrap">
                @foreach ($services as $service)
                <label>
                    <input type="radio" name="service_id" value="{{$service->id}}">
                    {{$service->name}} ({{$service->duration}}m)
                </label>
                @endforeach
            </div>
            @error('service_id')
                <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-semibold">Date</label>
            <input type="datetime-local" name="date" class="border border-gray-300 p-2 rounded w-full">
            @error('date')
                <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="py-2 px-4 rounded bg-neutral-900 text-white font-medium">Submit</button>
    </form>
</div>
@endsection
