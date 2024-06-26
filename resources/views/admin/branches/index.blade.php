@extends('layouts.dashboard')
@section('title', 'Branches')
@section('content')
<h3 class="text-xl font-bold mb-3">@yield('title')</h3>
<a href="{{route('branches.create')}}" class="bg-neutral-900 text-white py-2 px-4 rounded">+ Add</a>

<table class="w-full mt-6">
    <thead>
        <tr>
            <th class="border-b py-1 bg-slate-100">Name</th>
            <th class="border-b py-1 bg-slate-100">Location</th>
            <th class="border-b py-1 bg-slate-100">Open Hour</th>
            <th class="border-b py-1 bg-slate-100">Services</th>
            <th class="border-b py-1 bg-slate-100">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($branches as $branch)
            <tr class="text-center">
                <td class="py-2 border-b">{{$branch->name}}</td>
                <td class="py-2 border-b">{{$branch->location}}</td>
                <td class="py-2 border-b">{{$branch->open_hour}} - {{$branch->close_hour}}</td>
                <td class="py-2 border-b">
                    @foreach ($branch->branchDetails as $branchDetail)
                    <span class="bg-gray-100 py-1 px-2 border text-sm rounded">{{$branchDetail->service->name}}</span>
                    @endforeach
                </td>
                <td class="py-2 border-b">
                    <div class="flex justify-center gap-3">
                        <a href="{{route('branches.edit', $branch->id)}}" class="bg-neutral-900 text-white py-2 px-4 rounded">Edit</a>
                        <form action="{{route('branches.destroy', $branch)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
