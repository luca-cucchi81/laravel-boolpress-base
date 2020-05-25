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
                <h2>Edit User</h2>
            </div>
        </div>

        <div class="row">
            <form class="col-4 offset-4" action="{{route('admin.users.update', $user->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="font-weight-bold" for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name') ?? $user->name}}">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email') ?? $user->email}}">
                </div>
                <input class="btn btn-primary col-4 offset-4 font-weight-bold" style="margin-top: 10px;" type="submit" value="SAVE">
            </form>
        </div>
    </div>
@endsection
