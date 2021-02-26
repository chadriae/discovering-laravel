@extends('interface/master')
@extends('interface/header')
@extends('interface/footer')
@extends('interface/meta')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col border">
            Here you will see all the info about the page. test
        </div>
        <div class="col border" id="image">
            <img src="{{asset("./images/vinyl-collection.jpg")}}">
        </div>
    </div>
</div>
@endsection