@extends('master')
@extends('header')
@extends('footer')
@extends('meta')

@section('title', 'Home')

@section('content')
<div class="p-4">
    <h1>Homepage</h1>
    <p>Hello, {{ $name }}.</p>
    <p>Go to the form page.</p>
</div>
@endsection