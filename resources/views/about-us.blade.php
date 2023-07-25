@extends('outer-layout')

@section('title', 'outer home')

@section('context')

<div class="outer-home">
    <div class="outer-home-1">
        <h3>Shop-1 is made by Yohanes Amadeo Marvell as a personal project</h3>
        <h5>This website contains simple tasks such as choosing products sorted by category or brand</h5>
        <h5>Using the search bar, users can also search for products by typing its name, category, or brand</h5>
        <h5>Users can add the chosen product to a cart, which can be checked out or deleted</h5>
        <h5>The checked out product is then transfered to the transaction history</h5>
        <h5>Users also can edit their profile or delete it</h5>
    </div>
    <div class="outer-home-2">
        <img src="{{ asset('Images/home image.jpeg') }} " style="border-radius: 20px; width: 120%;" alt="">
    </div>
</div>
<style>
    .outer-home{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 175px;
    }

    .outer-home-1{
        padding: 20px;
        font-weight: bold;
        color: maroon;
        display: flex;
        flex-direction: column;
    }
    .outer-home-2{
        padding: 20px;
    }

</style>

@endsection
