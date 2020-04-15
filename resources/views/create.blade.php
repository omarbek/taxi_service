@extends('layouts.main')
@section('content')
    <div class="row">
        <form action="{{ Route('users.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
@endsection
