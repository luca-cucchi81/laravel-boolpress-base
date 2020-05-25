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
        <form action="{{route('admin.users.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="{{old('password')}}">
            </div>
            <input class="btn btn-primary" type="submit" value="CREATE">
        </form>
    </div>
@endsection
