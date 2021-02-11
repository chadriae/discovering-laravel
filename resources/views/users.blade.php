@extends('interface/master')
@extends('interface/header')
@extends('interface/footer')
@extends('interface/meta')

@section('title', 'Users')

@section('content')
<div class="p-2">
    <h1>Users</h1>
    <p>A list of all the users on our platform</p>
    @if(Session::has('success'))
    <div class="alert alert-danger">
        {{ Session::get('success') }}
    </div>
    @endif
    <ul>
    @foreach($users as $user)
    <li><h3><strong>{{ $user->username }}</strong></h3> 
        <a href="/users/{{ $user->username }}"><button type="button" class="btn btn-primary">More info</button></a> - 
        <a href="/delete/{{ $user->username }}"><button type="button" class="btn btn-warning">Delete</button></a></li><br>
    @endforeach
    </ul>
</div>
@endsection