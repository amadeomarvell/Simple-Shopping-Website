@extends('layout')

@section('title', 'Update Profile')

@section('context')

<div class="container">
    <div class="form-container">
        <form action="/update-profile" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            <div class="d-flex justify-content-center align-items-center">
                <h3 style="font-weight: bold; color: black; margin-bottom: 20px;">Update Profile</h3>
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Name:</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text"  name="name" id="name" value="{{ $data['name'] }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Email:</label>
                <input class="form-control @error('email') is-invalid @enderror" type="text"  name="email" id="email" value="{{ $data['email'] }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Password:</label>
                <input class="form-control @error('password') is-invalid @enderror" type="text"  name="password" id="password" value="{{ $data['password'] }}">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Confirm Password:</label>
                <input class="form-control @error('confirm') is-invalid @enderror" type="text"  name="confirm" id="confirm" value="{{ $data['confirm'] }}">
                @error('confirm')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Address:</label>
                <input class="form-control @error('address') is-invalid @enderror" type="text"  name="address" id="address" value="{{ $data['address'] }}">
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: purple; font-weight: bold;">Age:</label>
                <input class="form-range @error('age') is-invalid @enderror" type="range" min="0" max="100"  name="age" id="age" value="{{ $data['age'] }}">
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
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
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
</style>

@endsection
