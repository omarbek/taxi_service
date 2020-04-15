@extends('layouts.main')
@section('content')
    <div class="row">
        <a href="{{ Route('users.create') }}">
            <button>Create new user</button>
        </a>
        <div class="col-sm-12">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Role</th>
                    <th>Created At</th>
                </tr>
                @foreach($users as $user)
                    <tr class="text-center">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->getRole->name }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td><a href="{{ Route('users.edit', ['id' => $user->id]) }}">Edit</a></td>
                        <td><a href="{{ Route('users.delete', ['id' => $user->id]) }}">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
