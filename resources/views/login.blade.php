@extends('outer-layout')

@section('title', 'login')

@section('context')

<div class="container">
    <div class="form-container">
        <form action="/login" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex justify-content-center align-items-center">
                <h3 style="font-weight: bold; color: black; margin-bottom: 20px;">Login</h3>
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Email:</label>
                <input class="form-control @error('email') is-invalid @enderror" type="text"  name="email" id="email">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Password:</label>
                <input class="form-control @error('password') is-invalid @enderror" type="text"  name="password" id="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <small>Don't have an account?<a href="/register" class="card-link" style="margin-left: 20px;">Register here!</a></small>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <div class="img-container">
        <img src="{{ asset('Images/home image.jpeg') }}" alt="">
    </div>
</div>
<style>
    .container{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 15px;
        padding: 10px;
        background-color: rgb(245, 245, 245);
        border-radius: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: relative;
        width: 60%;
        height: 400px;
        margin-bottom: 50px;
    }

    .img-container{
        margin-left: 100px;
    }

    .img-container img{
        border-radius: 20px;
        height: 120%;
    }
</style>

@endsection
