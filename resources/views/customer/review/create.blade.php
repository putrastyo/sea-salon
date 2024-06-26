@extends('layouts.dashboard')
@section('title', 'Add Review')
@section('content')

<h3 class="text-xl font-bold mb-3">@yield('title')</h3>
<a href="{{route('reviews.index')}}" class="bg-neutral-900 text-white py-2 px-4 rounded">Back</a>

<div class="md:w-1/2 mt-5">
    <form action="{{route('reviews.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="block mb-2">Rating (1 - 5)</label>
            <input type="number" name="rating" class="border border-gray-300 p-2 rounded w-full" placeholder="Star" max="5">
        </div>
        <div class="mb-3">
            <label for="" class="block mb-2">Comment</label>
            <textarea name="comment" rows="10" placeholder="Comment" class="border border-gray-300 p-2 rounded w-full"></textarea>
        </div>
        <button type="submit" class="w-full py-2 px-4 rounded bg-neutral-900 text-white font-medium">Submit</button>
    </form>
</div>

@endsection
