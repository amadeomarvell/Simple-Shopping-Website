@extends('outer-layout')

@section('title', 'outer home')

@section('context')

<div class="outer-home">
    <div class="outer-home-1">
        <h3>Welcome to Shop-1!! Please enjoy your shopping!!</h3>
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
    }
    .outer-home-2{
        padding: 20px;
    }

</style>

@endsection
