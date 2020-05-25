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
        <form action="{{route('admin.users.update', $user->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name') ?? $user->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email') ?? $user->email}}">
            </div>
            <input class="btn btn-primary" type="submit" value="Save">
        </form>
    </div>
@endsection
