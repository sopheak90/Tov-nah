@extends('layouts.master')

@section('title')
Resgister
@endsection

@section('content')
<div class="content" style="padding-top: 20px;">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form action="/register-update/{{$users['id']}}" method="POST" style="width: 70%;height:30%">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="mb-3">
                            <label>Username</label>
                            <input type="name" class="form-control" value="{{$users['name']}}" name="username">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{$users['email']}}" name="Email">
                        </div>
                        <div class="mb-3">
                            <label>Roll</label>
                            <select name="UserRoll" class="form-control">
                                <option value="Admin">admin</option>
                                <option value="User">user</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="phone" class="form-control" value="{{$users['phone']}}" name="Phone">
                        </div>
                        <button href="{{url('/register')}}" type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="../assets/img/bg5.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                            <h5 class="title">{{$users->name}}</h5>
                        </a>
                        <p class="description">
                            Roll : {{$users->roll}}
                        </p>
                    </div>
                    <p class="description text-center">
                        ID : {{$users->id}}<br>
                        Phone Number : {{$users->phone}} <br>
                        Email : {{$users->email}}<br>
                    </p>
                </div>
                <hr>
                <div class="button-container">
                    <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ __('Logout') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<link rel="stylesheet" href="css/profile.css">

@endsection