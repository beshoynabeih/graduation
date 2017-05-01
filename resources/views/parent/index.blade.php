@extends('layouts.app')
@section('title')
Welcome mr.{{Auth::user()->name}}
@endsection
@section('header')
<link rel="stylesheet" href="css/home.css" />
@endsection

@section('content')
<div class="container">
  <nav class="parentnav">
    <ul class="parentmenu" id="parentmenu">
        <li><a href="{{url('/parent/notifications')}}">Notifications <span class="badge">{{$notes_count}}</span></a></li>
        <li><a href="{{url('/parent/comingexams')}}">Coming Exams</a></li>
        <li><a href="{{url('/parent/resutls')}}">Result</a></li>
        <li><a href="{{url('/parent/ask')}}">Ask question</a></li>
        <div class="clear"></div>
    </ul>
  </nav>
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
      <img src="images/carousel/1.jpg" alt="...">
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

<div class="news" style="margin-top:20px">
  <div class="alert alert-success" role="alert">Ahmed ali was first student in math last month</div>
  <div class="alert alert-info" role="alert">Mr.Khaled is the best teacher in English</div>
  <div class="alert alert-warning" role="alert">check your notifications</div>
  <div class="alert alert-danger" role="alert">absence is a bad habbit.</div>

</div>

</div>
@endsection
