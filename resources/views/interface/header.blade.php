@section('header')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand p-2" href="/index">Discovering Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link {{ request()->is('index') ? 'active' : ''}}" href="/index">Home</a>
        <a class="nav-item nav-link {{ request()->is('register') ? 'active' : ''}}" href="/register">Register</a>
        <a class="nav-item nav-link {{ request()->is('users') ? 'active' : ''}}" href="/users">Users</a>
      </div>
    </div>
</nav>
@endsection 