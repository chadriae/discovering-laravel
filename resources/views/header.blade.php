@section('header')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ms-2" href="/home">Discovering Laravel</a>
    <div class="navbar-nav">
        <a class="nav-item nav-link {{ Request::is('home') ? 'active' : '' }}" href="/index">Home</a>
        <a class="nav-item nav-link {{ Request::is('form') ? 'active' : '' }}" href="/form">Form</a>
    </div>
</nav>
@endsection