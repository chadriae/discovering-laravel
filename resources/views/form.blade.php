@extends('master')
@extends('header')
@extends('footer')
@extends('meta')

@section('title', 'Form')

@section('content')
<div class="p-2">
    <h1>Form</h1>
    <p>Register as a new user.</p>
    <form action="form" method="post">
        @csrf
        <input class="col-lg-4" type="text" name="first-name" placeholder="Enter first name" /></input><br><br>
        <input class="col-lg-4"type="text" name="last-name" placeholder="Enter last name" /></input><br><br>
        <input class="col-lg-4" type="text" name="user-name" placeholder="Enter a user name" /></input><br><br>
        <input class="col-lg-4" type="password" name="pwd" placeholder="Enter a password" /></input><br><br>
        <input class="col-lg-4" type="password" name="pwd-repeat" placeholder="Repeat the password" /></input><br><br>
        <input type="submit" name="submit" value="Submit" /></input>
    </form>
</div>
@endsection