@extends('layout')

@section('context')

@section('title', 'Transaction')

<head>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: top;
            justify-content: top;
            background-color: #f3f3f3;
            border-radius: 20px 20px;
            margin-bottom: 100px;
            margin-top: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 100%;
            position: relative;
            width: 80%;
        }
    </style>
</head>

<div class="container">
    <div class="d-flex mt-3 justify-content-center">
        <h3 style="color:rgb(51, 183, 216)">Transaction History</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th></th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Payment Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->transaction_id }}</td>
                        <td><img src="{{ asset('Images/'.$transaction->product_name.'.png') }}" style="width: 30%;"></td>
                        <td>{{ $transaction->product_name }}</td>
                        <td>{{ $transaction->product_price }}</td>
                        <td>{{ $transaction->product_desc }}</td>
                        <td>{{ $transaction->cart_qty }}</td>
                        <td>{{ $transaction->status }}</td>
                        <td>{{ $transaction->total_price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
