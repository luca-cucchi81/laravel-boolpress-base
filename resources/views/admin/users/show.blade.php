@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{$user->name}}</h2>
        <div>
            {{$user->email}}
        </div>
    </div>
@endsection
