@section('header')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ms-2" href="/index">Discovering Laravel</a>
    <div class="navbar-nav">
        <a class="nav-item nav-link {{ Request::is('index') ? 'active' : '' }}" href="/index">Home</a>
        <a class="nav-item nav-link {{ Request::is('form') ? 'active' : '' }}" href="/form">Form</a>
        <a class="nav-item nav-link {{ Request::is('users') ? 'active' : '' }}" href="/users">Users</a>
    </div>
</nav>
@endsection