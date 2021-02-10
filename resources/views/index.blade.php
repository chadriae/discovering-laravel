@extends('interface/master')
@extends('interface/header')
@extends('interface/footer')
@extends('interface/meta')

@section('title', 'Home')

@section('content')
<div class="p-4">
    <h1>Homepage</h1>
    <p>Hello, {{ $name }}.</p>
    <p>Go to the form page.</p>
</div>
@endsection