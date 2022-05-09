<link rel="stylesheet" href="css/navbar.css">
<nav class="navbar sticky-md-top navbar-expand navbar-dark" style="background-color: #376d81;">
  <div class="d-flex align-items-center">
          <a class="navbar-brand fw-bold brand"  href="/">Asean Entrepreneurship Profiling</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    <div class="collapse navbar-collapse home" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Test") ? 'active' : '' }}" href="/test">Test</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Results") ? 'active' : '' }}" href="/result">Results</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </li>
    </li>
  </ul>  
  
  @auth
  <form action="/logout" method="post">
    @csrf
    <button type="submit" class="dropdown-item logout">Logout</button>
  </form>
  @else
  <div class="collapse navbar-collapse tton" id="navbarNav">
    <a href="/register">
      <button type="button" class="btn btn-primary regis">Register</button>
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
    </ul>
  </div>
  @endauth
    </div>
  </div>
</nav>