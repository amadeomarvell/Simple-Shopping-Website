@extends('layout')

@section('title', 'Product Detail')

@section('context')

<div>
    <div class="d-flex" style="margin-top: 20px; margin-left: 30px;">
        @foreach ($products as $product)
            <img src="{{ asset('Images/'.$product->product_name.'.png') }}" style="border: 2px solid black; width: 20%; border-radius: 20px; padding: 20px;">
            <div class="flex-grow-1 ms-3">
                <ul style="list-style: none;">
                    <li class="list-group-item; fs-4"><b>{{ $product->product_name }}</b></li>
                    <a href="/brand_detail/{{ $product->brand_id }}" class="card-link">{{ $product->brands->brand_name }}</a>
                    <li class="list-group-item"><b>Rp{{ $product->product_price }},-</b></li>
                    <li><b>Description: {{ $product->product_desc }}</b></li>
                </ul>
                <form method="POST" action="{{ route('cart.add', $product->product_id) }}">
                    @csrf
                    <button class="button-link fw-bold" type="submit" style="color: white">Add to Cart</button>
                </form>
            </div>
            <style>
                .card-link {
                    color: rgb(233, 128, 29);
                    text-decoration: none;
                }

                .card-link:hover {
                    color: rgb(255, 210, 113);
                    text-decoration: underline;
                }
                .button-link {
                    padding: 10px;
                    background-color: #2071a0;
                    color: #000000;
                    border-radius: 4px;
                    margin-left: 35px;
                }

                .button-link:hover {
                    background-color: #389dcc;
                }
            </style>
        @endforeach
    </div>
</div>

@endsection
