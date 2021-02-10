@extends('interface/master')
@extends('interface/header')
@extends('interface/footer')
@extends('interface/meta')

@section('title', 'Users')

@section('content')
<div class="p-2">
    <h1>Succes!</h1>
    <p>Thank you for registering.</p>
    {{-- <p>{{ $users }}</p> --}}
    <ul>
    @foreach($users as $user)
    <li>{{ $user['username'] }} - {{ $user['email'] }}</li>
    @endforeach
    </ul>
</div>
@endsection