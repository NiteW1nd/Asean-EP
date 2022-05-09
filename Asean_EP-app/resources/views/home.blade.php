@extends('layout.main')

@section('container')
<link href="css/home.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bottom-bar.css" rel="stylesheet" type="text/css" media="all" />

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
@endsection