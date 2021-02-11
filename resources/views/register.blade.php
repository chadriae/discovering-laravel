@extends('interface/master')
@extends('interface/header')
@extends('interface/footer')
@extends('interface/meta')

@section('title', 'Form')

@section('content')
<div class="p-2">
    <h1>Form</h1>
    <p>Register as a new user.</p>

    {{-- succes message --}}
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <form method="post" action="">
        @csrf
        <div class="form-group">
            <label>Username:</label><br>
            <input class="col-lg-4" type="text" name="username" placeholder="Enter a user name" class="form-group" /></input>
            @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
            @endif
        </div><br>
        <div class="form-group">
            <label>Email:</label><br>
            <input class="col-lg-4" type="text" name="email" placeholder="Enter a valid email address" class="form-group" /></input>
            {{-- @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif --}}
            @error('email')
              <span class="text-danger">{{ $errors->first('email') }}</span>
            @enderror
        </div><br>
        <div class="form-group">
            <label>Enter a password:</label><br>
            <input class="col-lg-4" type="password" name="password" placeholder="Enter a password" class="form-group" /></input>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div><br>
        <div class="form-group">
            <label>Confirm your password:</label><br>
            <input class="col-lg-4" type="password" name="confirm_password" placeholder="Enter a password" class="form-group" /></input>
            @if ($errors->has('confirm_password'))
                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
            @endif
        </div><br>
            <input type="submit" value="Submit"></input>
        </div>   
     </form>
</div>
@endsection