@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-dark">

          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>E-MAIL</th>
              <th class="colspan-3"></th>
            </tr>
          </thead>

          <tbody>
              @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action="{{route('admin.users.edit', $user->id)}}">
                            <button class="btn btn-secondary" type="submit">Edit</button>
                        </form>
                    </td>
                </tr>
              @endforeach
          </tbody>

        </table>
    </div>
@endsection
