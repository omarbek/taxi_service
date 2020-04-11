@foreach ($users as $user)

    <label>{{ $user->id }}</label>
    <label>{{ $user->first_name }}</label>
    <label>{{ $user->getRole->name }}</label>

@endforeach
