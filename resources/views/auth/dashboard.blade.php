@extends('auth.layout')

@section('content')
    <div class="flex justify-center mt-5">
        <div class="w-1/2">
            <div class="bg-white rounded shadow">
                <div class="card-header px-4 py-2 bg-gray-100 font-semibold">Dashboard</div>
                <div class="card-body px-4 py-2">
                    <h1>Welcome, {{auth()->user()->name}}</h1>
                    @if ($message = Session::get('success'))
                        <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
                            {{ $message }}
                        </div>
                    @else
                        <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
                            You are logged in!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
