<!-- create.blade.php -->

@extends('income.layout')

@section('content')
    <div class="container">
        <h1 class="text-3xl font-bold mb-4">Add Income</h1>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('income.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="amount" class="block text-gray-700">Amount:</label>
                <input type="number" id="amount" name="amount" required
                    class="form-input mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="source" class="block text-gray-700">Source:</label>
                <input type="text" id="source" name="source" required
                    class="form-input mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea id="description" name="description"
                    class="form-textarea mt-1 block w-full border-gray-300 rounded-md"></textarea>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700">Date:</label>
                <input type="date" id="date" name="date" required
                    class="form-input mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
        </form>
    </div>
@endsection
