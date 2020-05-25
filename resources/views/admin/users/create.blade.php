@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="container">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="container">
        
        <div class="row">
            <div class="col-4 offset-4 display-5" style="margin-bottom: 40px; text-align: center;">
                <h2>Create New User</h2>
            </div>
        </div>

        <div class="row">
            <form class="col-6 offset-3"action="{{route('admin.users.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label class="font-weight-bold" for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="password">Password</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}">
                </div>
                <input class="btn btn-primary col-4 offset-4 font-weight-bold" style="margin-top: 10px;" type="submit" value="CREATE">
            </form>
        </div>
    </div>
@endsection
