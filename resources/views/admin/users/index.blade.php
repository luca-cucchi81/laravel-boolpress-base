@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-4 offset-4 display-5" style="margin-bottom: 50px;">
            <h2>USERS LIST</h2>
        </div>
        <div class="container" style="text-align: right; margin-bottom: 20px;">
            <form action="{{route('admin.users.create')}}">
                <button class="btn btn-success font-weight-bold" type="submit">New User</button>
            </form>
        </div>
        <table class="table">

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
                    <td>
                        <form action="{{route('admin.users.show', $user->id)}}">
                            <button class="btn btn-primary" type="submit">Show</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('admin.users.edit', $user->id)}}">
                            <button class="btn btn-secondary" type="submit">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('admin.users.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
              @endforeach
          </tbody>

        </table>
    </div>
@endsection
