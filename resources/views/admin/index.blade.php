@extends('layouts.app')

@section('title')
Admin
@endsection
@section('header')
<link rel="stylesheet" type="text/css" href="{{url('css/matrix-style.css')}}">
@endsection



@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ url('/updatetables') }}" class="submit">Update Tables</a>
      <a href="{{ url('/addemployee') }}" class="submit">Add Employee</a>
      
      @include('errors.showmessages')
      <br><br><br><br>
      <div class="widget-box widget-plain">
      <div class="center">
        <ul class="stat-boxes2">                  
          <li>
            <div class="left peity_line_neutral"><span><span style="display: none;"><span style="display: none;"><span style="display: none;"><span style="display: none;">10,15,8,14,13,10,10,15</span><canvas width="50" height="24"></canvas></span>
              <canvas width="50" height="24"></canvas>
              </span><canvas width="50" height="24"></canvas></span><canvas width="50" height="24"></canvas></span></div>
            <div class="right"> <strong>{{$s_count}}</strong> Students </div>
          </li>
          <li>
            <div class="left peity_bar_bad"><span><span style="display: none;"><span style="display: none;"><span style="display: none;"><span style="display: none;">3,5,6,16,8,10,6</span><canvas width="50" height="24"></canvas></span>
              <canvas width="50" height="24"></canvas>
              </span><canvas width="50" height="24"></canvas></span><canvas width="50" height="24"></canvas></span></div>
            <div class="right"> <strong>{{$t_count}}</strong> Teacher</div>
          </li>
          <li>
            <div class="left peity_line_good"><span><span style="display: none;"><span style="display: none;"><span style="display: none;"><span style="display: none;">12,6,9,23,14,10,17</span><canvas width="50" height="24"></canvas></span>
              <canvas width="50" height="24"></canvas>
              </span><canvas width="50" height="24"></canvas></span><canvas width="50" height="24"></canvas></span></div>
            <div class="right"> <strong>{{$e_count}}</strong> Employees </div>
          </li>
          <li>
            <div class="left peity_bar_good"><span><span style="display: none;">12,6,9,23,14,10,13</span><canvas width="50" height="24"></canvas></span></div>
            <div class="right"> <strong>{{$q_count}}</strong> Questions</div>
          </li>
          <li>
            <div class="left peity_bar_good"><span><span style="display: none;">12,6,9,23,14,10,13</span><canvas width="50" height="24"></canvas></span></div>
            <div class="right"> <strong>{{$a_count}}</strong> Answers</div>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{url('js/matrix.dashboard.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.peity.min.js')}}"></script>
@endsection