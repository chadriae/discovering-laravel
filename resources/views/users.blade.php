@extends('interface/master')
@extends('interface/header')
@extends('interface/footer')
@extends('interface/meta')

@section('title', 'Users')

@section('content')
<div class="p-2">
    <h1>Users</h1>
    <p>A list of all the users on our platform</p>
    <ul>
    @foreach($users as $user)
    <li>{{ $user->username }} - <a href="/users/{{ $user->username }}">More info</a></li>
    @endforeach
    </ul>
</div>
@endsection