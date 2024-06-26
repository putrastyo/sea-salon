@extends('layouts.app')
@section('content')
<div class="h-screen flex justify-center items-center">
    <div class="bg-[#F1F1EF] p-8 rounded-lg md:w-1/2 mx-auto border">
        @if (session()->has('success'))
            <div class="text-center mb-3">
                <p class="text-green-500">{{session('success')}}</p>
            </div>
        @endif
        <h3 class="text-3xl font-bold text-center mb-5">Login</h3>

        <form action="{{route('doLogin')}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" name="email" class="border border-gray-300 p-2 rounded w-full" placeholder="Email">
                @error('email')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="border border-gray-300 p-2 rounded w-full" placeholder="Password">
                @error('password')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="w-full py-2 px-4 rounded bg-neutral-900 text-white font-medium mb-3">Login</button>
            <div class="text-center">
                <a href="register" class="text-neutral-900 underline">Register</a>
            </div>
        </form>
    </div>
</div>
@endsection
