@extends('layouts.app')

@section('header')
<link rel="stylesheet" href="css/home.css" />
@endsection

@section('content')
<div class="about">
  <div class="container">
    <section class="title-section">
      <h1 class="title-header">About Our School</h1>
    </section>
  </div>
</div>
<div class="about_content">
  <div class="container">
    <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/carousel/4.jpg" alt="...">
              <div class="carousel-caption">
                <h1>Learn and live</h1>
              </div>
            </div>
            <div class="item">
              <img src="images/carousel/2.jpg" alt="...">
              <div class="carousel-caption">
                <h1>Learn and live</h1>
              </div>
            </div>
            <div class="item">
              <img src="images/carousel/3.jpg" alt="...">
              <div class="carousel-caption">
                <h1>Learn and live</h1>
              </div>
            </div>

          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          </div>
     
      
      </div>
    </div>
  </div>
</div>
<div class="highlight-info">
  <div class="overlay spacer">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-smile-o fa-5x"></i>
          <h4>200 Disk for students</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-check-square-o fa-5x"></i>
          <h4>2 Completed modern lap</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-trophy fa-5x"></i>
          <h4>5 awards from education ministry</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-map-marker fa-5x"></i>
          <h4>3 Offices</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="testimonial-area">
  <div class="testimonial-solid">
    <div class="container">
      <h2>Best Students</h2>
      <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" style="bottom:-40px">
          <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic_2" data-slide-to="1" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic_2" data-slide-to="2" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic_2" data-slide-to="3" class=""> <a href="#"></a> </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <p>The best student in Math</p>
            <p><strong>Mina Atef</strong></p>
          </div>
          <div class="item">
            <p>The best Student in Science</p>
            <p><strong>Ahmed Khaled</strong></p>
          </div>
          <div class="item">
            <p>The best student in Arabic</p>
            <p><strong>Asmaa Ali</strong></p>
          </div>
          <div class="item">
            <p>The best student in English</p>
            <p><strong>Beshoy Nabeih</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
