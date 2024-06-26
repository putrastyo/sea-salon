@extends('layouts.dashboard')
@section('title', 'Review')
@section('content')

<h3 class="text-xl font-bold mb-3">@yield('title')</h3>
<a href="{{route('reviews.create')}}" class="bg-neutral-900 text-white py-2 px-4 rounded">+ Add</a>

<div class="grid gap-3 md:grid-cols-4 grid-cols-2 mt-5">
    @foreach ($reviews as $review)
    <div class="bg-gray-100 border-2 rounded-xl p-6">
        <div class="mb-3">
            <div class="flex gap-2">
                @for ($i = 0; $i < $review->rating; $i++)
                <i class="bi bi-star-fill"></i>
                @endfor
            </div>
            <small>~ {{$review->user->fullname}}</small>
        </div>
        <p class="mb-3">{{$review->comment}}</p>
        <form action="{{route('reviews.destroy', $review)}}" method="post" onsubmit="return confirm('Are you sure?')">
            @csrf
            @method('delete')
            <button type="submit" class="bg-red-700 text-white py-2 px-4 rounded"><i class="bi bi-trash"></i></button>
        </form>
    </div>
    @endforeach
</div>

@endsection
