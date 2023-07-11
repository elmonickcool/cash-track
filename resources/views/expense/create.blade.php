@extends('auth.layout')

@section('content')
    <div class="flex justify-center mt-5">
        <div class="w-1/2">
            <div class="bg-white rounded shadow">
                <div class="card-header px-4 py-2 bg-gray-100 font-semibold">Add Expense</div>
                <div class="card-body px-4 py-2">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('expense.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" name="description" id="description" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="number" name="amount" id="amount" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Expense</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
