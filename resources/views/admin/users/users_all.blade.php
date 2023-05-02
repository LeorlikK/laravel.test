@extends('admin.layout')

@section('table')
{{--    {{ $uss }}--}}
    <h1>USERS</h1>
    {{ $uss }}
    @foreach($uss as $user)
        <p>{{ $user->id }}</p>
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <p>{{ $user->email_verified_at }}</p>
        <p>{{ $user->state }}</p>
        <form action="{{ route('admin.users_state', $user->id) }}" method="post">
            @csrf
            @method('patch')
            <label for="state_id">State:</label>
            <input id="state_id" name="state" value="{{ $user->state != '' ? $user->state : 'Null' }}">
           @error('state') <p>{{ $message }}</p>@enderror
            <button type="submit">Update</button>
        </form>
    @endforeach
    {{ $uss->withQueryString()->onEachSide(2)->links() }}
@endsection
