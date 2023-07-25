@extends('layout')

@section('title', 'Edit Profile')

@section('context')

<body>
    <div class="column">
        <div class="d-flex mt-3" style="display:flex; flex-direction: column; align-items: center; justify-content: center; height: 15vh;">
            <h3 style="color: rgb(26, 145, 129)">My Account</h3>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card border-dark mb-3" style="max-width: 540px;">
                <div class="row g-0" style="width: 500px">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">{{ $user->name }}</h4>
                                <h6 class="card-text" style="color: orange;">{{ $user->email }}</h6>
                                <h6 style="margin-top: 5px;">Address:</h6>
                                <h6 class="card-text">{{ $user->address }}</h6>
                                <h6 class="card-text">{{ $user->age }} years old</h6>
                            </div>
                        </div>
                    <div class="col-3 d-block">
                        <div class="card-body">
                            <a href={{ "update-profile/".$user->id }} class="button-link" style="color:white; background-color: rgb(88, 88, 228); padding: 10px 20px; border-radius: 5px;">Update</a>
                        </div>
                        <div class="card-body">
                            <a href={{ "delete-profile/".$user->id }} class="button-link" style="color:white; background-color: rgb(219, 61, 61); padding: 10px 20px; border-radius: 5px;">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    .button-link{
        justify-content: right;
    }
</style>

@endsection
