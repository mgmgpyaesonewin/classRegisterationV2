<nav class="navbar is-fixed-top is-warning" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="{{ asset('/images/logo.png') }}" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    @auth
      <div class="navbar-start">
        <a class="navbar-item" href="{{url('courses/create')}}">
          Course
        </a>
  
        <a class="navbar-item">
          User
        </a>
  
        <a class="navbar-item">
          Register
        </a>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-danger" href="{{ route('login') }}">
              Change Password
            </a>
            <a class="button is-light" href="{{ route('login') }}">
              Logout
            </a>
          </div>
        </div>
      </div>
    @else
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-light" href="{{ route('login') }}">
              Log in
            </a>
          </div>
        </div>
      </div>
    @endauth  
  </div>
</nav>