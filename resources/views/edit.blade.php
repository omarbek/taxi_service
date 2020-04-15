@extends('layouts.main')
@section('content')
    <div class="row">
        <form action="{{ Route('users.update', ['id' => $user->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" name="first_name" id="first_name" class="form-control"
                       value="{{ $user->first_name }}"
                       required>
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $user->last_name }}"
                       required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $user->phone }}"
                       required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}"
                       required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
@endsection
