@extends('layouts.dashboard')
@section('title', 'Reservation')
@section('content')

<h3 class="text-xl font-bold mb-3">@yield('title')</h3>
<a href="{{route('reservation.create')}}" class="bg-neutral-900 text-white py-2 px-4 rounded">+ Add</a>

<table class="w-full mt-6">
    <thead>
        <tr>
            <th class="border-b py-1 bg-slate-100">Name</th>
            <th class="border-b py-1 bg-slate-100">Phone</th>
            <th class="border-b py-1 bg-slate-100">Branch</th>
            <th class="border-b py-1 bg-slate-100">Service</th>
            <th class="border-b py-1 bg-slate-100">Date</th>
            <th class="border-b py-1 bg-slate-100">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
            <tr class="text-center">
                <td class="py-2 border-b">{{$reservation->name}}</td>
                <td class="py-2 border-b">{{$reservation->phone}}</td>
                <td class="py-2 border-b">{{$reservation->branch->name}}</td>
                <td class="py-2 border-b">{{$reservation->service->name}}</td>
                <td class="py-2 border-b">{{$reservation->date}}</td>
                <td class="py-2 border-b">
                    <div class="flex justify-center gap-3">
                        <form action="{{route('reservation.destroy', $reservation)}}" method="post">
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
