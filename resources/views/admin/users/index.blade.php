@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-dark">

          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>E-MAIL</th>
            </tr>
          </thead>

          <tbody>
              @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
              @endforeach
          </tbody>

        </table>
    </div>
@endsection
