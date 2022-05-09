<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<link href="css/home.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bottom-bar.css" rel="stylesheet" type="text/css" media="all" />
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
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/test">Test</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/result">Results</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
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
<div class="top">
  <div class="container text">
      <p><h2>Assessing ASEAN Entrepreneurs</h2></p>
      <div class="container detail">
        <p>
          <h5>ASEAN Entrepreneurship Profiling can be a reference for entrepreneurs to conduct self-assessment 
          so that they can get the right profile picture to become a successful entrepreneur. This profiling is 
          expected to contribute to increasing the success of entrepreneurs in particular so that they can be 
          useful in improving the nation’s economy more broadly.
          </h5>
        </p>
      </div>
      <div class="container btn">
        <a href="/test">
          <button type="button" class="btn btn-primary">Take a test</button>
        </a>
      </div>
  </div>
</div>
<div class="container dtl border-bottom">
  <p>The success of entrepreneurs in developing a business is determined by many things. These complex factors 
    automatically produce a comprehensive entrepreneur profile. On the other hand, the proliferation of start-up 
    businesses and various entrepreneurship models does not necessarily make all types of businesses successful. 
    Not to mention the occurrence of competition not only by local business actors of a country, but also competition 
    between countries. Therefore, ASEAN Entrepreneurship Profiling is one of the initial efforts to reconcile profiles 
    between ASEAN countries and also finds the strongest determinants of forming entrepreneurs in ASEAN.</p>
</div>

<div class="container partner">
  <h1>Our Partners</h1>
  <p>This ASEAN Entrepreneurship Profiling research was conducted in collaboration with RIG Edutech Bina Nusantara 
    University with Universiti Teknologi Malaysia (UTM) and Universitas Agung Podomoro (UAP) Indonesia.</p>
</div>
    @include('part.bottom')
</body>
</html>