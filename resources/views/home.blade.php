@extends('layout')

@section('title', 'home')

@section('context')

<div class="p-3">
    <div class="mt-3">
        <h3 style="justify-content: center; align-items: center; font-weight: bold; background-color: rgb(231, 150, 0); color: white; padding: 10px; margin-bottom: 50px; margin-left: 30px;">Our Products</h3>
    </div>
    <div class="card-container">
        @foreach ($products as $product)
            <div class="col-3">
                <div class="card mb-4" style="width: 18rem; margin-bottom: 20px; padding: 10px;">
                    <img src="{{ asset('Images/'.$product->product_name.'.png') }}" style="width: 80%;" alt="">
                    <ul style="list-style: none;">
                        <li style="font-weight: bold; font-size: 18px; color: black;">{{ $product->product_name }}</li>
                        <a href="/brand-detail/{{ $product->brand_id }}" style="font-weight: bold; color: orange;" class="card-link">{{ $product->brands->brand_name }}</a>
                        <li style="font-weight: bold; color: red;">Rp{{ $product->product_price }}</li>
                        <li style="font-weight: bold; color: black;">Desc: {{ $product->product_desc}}</li>
                    </ul>
                    <form method="POST" action="{{ route('cart.add', $product->product_id) }}">
                        @csrf
                        <button class="button-link fw-bold" type="submit" style="color: white">Add to Cart</button>
                    </form>
                    <button class="button-link fw-bold" style="background-color: rgb(219, 143, 0); margin-top: 5px;"><a href="/product-detail/{{ $product->product_id }} " style="color: white; font-weight: bold;">Detail</a></button>
                </div>
            </div>
            @if($loop->iteration % 4 === 0)
                </div><div class="card-container">
            @endif
        @endforeach

    </div>
    <div class="pagination">
        {{ $products->links() }}
    </div>
</div>
<style>
    .card-container{
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-left: 30px;
        margin-bottom: 20px;
    }

    .button-link {
        padding: 10px;
        background-color: #2071a0;
        color: #000000;
        border-radius: 4px;
        width: 100%;
    }

    .button-link:hover {
        background-color: #389dcc;
    }

    .card{
        border-radius: 10px;
        border-color: black;
    }

    .pagination{
        display: flex;
        justify-content: center;
        margin-bottom: 50px;
    }
</style>

@endsection
