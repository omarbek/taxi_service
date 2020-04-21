@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div style="text-align: center;">
                            <label><h1>Welcome page!</h1></label>
                        </div>

                        <div style="text-align: center;">
                            <a class="btn btn-primary" href="{{ Route('users.index') }}" role="button">Show users</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
