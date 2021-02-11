@extends('interface/master')
@extends('interface/header')
@extends('interface/footer')
@extends('interface/meta')

@section('title', 'Users')

@section('content')
<div class="p-2">
    <h1>Detail page of <br><em>{{ $user->username }}</em></h1>
    <br>
    <ul> 
        <li>Email address is: {{ $user->email }}</li>
        <li>Account created on: {{ $user->created_at }}</li>
    </ul>
    <a href="/users"><button type="button" class="btn btn-secondary">Go back</button></a>
</div>
@endsection