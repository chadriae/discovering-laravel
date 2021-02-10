@extends('interface/master')
@extends('interface/header')
@extends('interface/footer')
@extends('interface/meta')

@section('title', 'Users')

@section('content')
<div class="p-2">
    <h1>Detail page of <br>{{ $user->username }}</h1>
    <ul>  
        <li>Email address is: {{ $user->email }}</li>
        <li>Account created on: {{ $user->created_at }}</li>
    </ul>
    <a href="/users"><button>Go back</button></a>
</div>
@endsection