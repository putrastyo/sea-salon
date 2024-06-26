@extends('layouts.dashboard')
@section('title', 'Services')
@section('content')
<h3 class="text-xl font-bold mb-3">@yield('title')</h3>
<a href="{{route('services.create')}}" class="bg-neutral-900 text-white py-2 px-4 rounded">+ Add</a>

<div class="grid md:grid-cols-4 grid-cols-2 gap-3 mt-5">
    @foreach ($services as $service)
    <div class="bg-slate-100 border p-4 rounded-lg">
        <h4 class="text-lg font-bold">{{$service->name}}</h4>
        <p>{{$service->duration}} minutes</p>
        <div class="flex mt-3">
            <form action="{{route('services.destroy', $service)}}" method="post" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('delete')
                <button type="submit" class="bg-red-700 text-white py-2 px-4 rounded"><i class="bi bi-trash"></i></button>
            </form>
            <a href="{{route('services.edit', $service)}}" class="bg-neutral-900 text-white py-2 px-4 rounded ml-2"><i class="bi bi-pencil"></i></a>
        </div>
    </div>
    @endforeach
</div>
@endsection
