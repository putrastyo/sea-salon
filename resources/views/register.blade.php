@extends('layouts.app')
@section('content')
<div class="h-screen flex justify-center items-center">
    <div class="bg-[#F1F1EF] p-8 rounded-lg md:w-1/2 mx-auto border">
        <h3 class="text-3xl font-bold text-center mb-5">Register</h3>

        <form action="{{route('doRegister')}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" name="fullname" class="border border-gray-300 p-2 rounded w-full" placeholder="Full name">
                @error('fullname')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" name="email" class="border border-gray-300 p-2 rounded w-full" placeholder="Email">
                @error('email')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="number" name="phone" class="border border-gray-300 p-2 rounded w-full" placeholder="Phone">
                @error('phone')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="border border-gray-300 p-2 rounded w-full" placeholder="Password">
                @error('password')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="w-full py-2 px-4 rounded bg-neutral-900 text-white font-medium mb-3">Register</button>
            <div class="text-center">
                <a href="login" class="text-neutral-900 underline">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection
