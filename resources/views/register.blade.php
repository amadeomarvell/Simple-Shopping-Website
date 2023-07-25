@extends('outer-layout')

@section('title', 'register')

@section('context')

<div class="container">
    <div class="form-container">
        <form action="/register" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex justify-content-center align-items-center">
                <h3 style="font-weight: bold; color: black; margin-bottom: 20px;">Register</h3>
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Name:</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text"  name="name" id="name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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
                <label class="form-label" style="color: purple; font-weight: bold;">Confirm Password:</label>
                <input class="form-control @error('confirm') is-invalid @enderror" type="text"  name="confirm" id="confirm">
                @error('confirm')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Address:</label>
                <input class="form-control @error('address') is-invalid @enderror" type="text"  name="address" id="address">
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Age:</label>
                <input class="form-range @error('age') is-invalid @enderror" type="range" min="0" max="100"  name="age" id="age">
                <span id="ageValue">50</span>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        // When the range input value changes, update the span element
                        $('#age').on('input', function() {
                            $('#ageValue').text($(this).val());
                        });
                    });
                </script>
                @error('age')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <small>Already have an account?<a href="/login" class="card-link" style="margin-left: 20px;">Log in here!</a></small>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
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
        margin-top: 50px;
        padding: 10px;
        background-color: rgb(245, 245, 245);
        border-radius: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 60%;
        height: 750px;
        margin-bottom: 150px;
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
