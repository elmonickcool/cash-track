@extends('auth.layout')

@section('content')
<div class="flex justify-center mt-5">
    <div class="w-1/2">
        <div class="bg-white rounded shadow">
            <div class="card-header px-4 py-2 bg-gray-100 font-semibold flex justify-between items-center">
                <h1>Welcome, {{ auth()->user()->name }}</h1>
                <a href="{{ route('income.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Add Income</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Logout</button>
                </form>
            </div>
            <div class="card-body px-4 py-2">
               <!--  @if ($message = Session::get('success'))
                <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
                    {{ $message }}
                </div>
                @else
                <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
                    You are logged in!
                </div>
                @endif -->
                <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
                Total Income: {{ number_format($totalIncome, 2) }}
            </div>
            </div>
           
            
        </div>
    </div>
</div>
@endsection