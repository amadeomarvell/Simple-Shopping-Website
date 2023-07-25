@extends('layout')

@section('context')

@section('title', 'View Cart')

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
        <h3 style="color:rgb(51, 183, 216)">My Cart</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
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
                @foreach ($carts as $cart)
                    <tr>
                        <td><img src="{{ asset('Images/'.$cart->product_name.'.png') }}" style="width: 30%;"></td>
                        <td>{{ $cart->product_name }}</td>
                        <td>Rp{{ $cart->product_price }}-,</td>
                        <td>{{ $cart->product_desc }}</td>
                        <td>{{ $cart->cart_qty }}</td>
                        <td>Rp{{ $cart->total_price }}-,</td>
                        <td>{{ $cart->status }}</td>
                        <td>
                            <form method="POST" action="{{ route('checkout', ['cart_id' => $cart->cart_id]) }}">
                                @csrf
                                <button class="button-link fw-bold justify-content-center align-items-center" type="submit" style="background-color: green; color: white; margin-bottom: 10px;border-radius: 10px;">Checkout</button>
                            </form>

                            <button class="button-link fw-bold justify-content-center align-items-center" type="submit" style="background-color: red; border-radius: 10px;"><a style="color: white;" href="{{ "delete-cart/".$cart->cart_id }}">Delete</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
