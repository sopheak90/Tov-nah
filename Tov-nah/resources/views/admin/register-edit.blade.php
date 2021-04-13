@extends('layouts.master')

@section('title')
Resgister-edit
@endsection

@section('content')
<div class="row" style="width: 60%;margin-left:20%;">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Register Edit</h4>
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
                    <a href="{{url('/register')}}" class="btn btn-danger">Cannel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection