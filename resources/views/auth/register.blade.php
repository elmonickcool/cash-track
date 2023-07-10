@extends('auth.layout')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/3 bg-white p-8 rounded shadow">
            <h1 class="text-5xl text-center font-bold m-5">CashTrack</h1>
            <h1 class="text-2xl text-center font-bold mb-4">Register</h1>
            <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="form-input mt-1 block w-full" required autofocus>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="form-input mt-1 block w-full" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="form-input mt-1 block w-full" required>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-input mt-1 block w-full" required>
                </div>

                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Register</button>
            </form>
        </div>
    </div>
@endsection
