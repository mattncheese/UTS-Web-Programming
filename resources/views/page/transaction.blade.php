@extends('root')



@section('content')
    <div class="container">
        <div class="center">
            <h1 class="p-3 font-bold">Transaction List</h1>
        </div>

        @foreach ($transactions as $transaction)
            <div class="p-3 m-2">
                <p class="font-semibold text-lg mb-2">{{ $transaction->created_at }}</p>
                <p class="text-sm">{{ $transaction->coffee->name }}</p>
                <p class="text-sm">{{ $transaction->coffee->price }}</p>
            </div>
            <hr class="my-3" />
        @endforeach

    </div>
@endsection
