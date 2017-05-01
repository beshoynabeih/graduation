@extends('layouts.app')

@section('title')
Add Employee
@endsection

@section('header')
<link rel="stylesheet" href="css/jquery-ui.min.css">
<script src="js/jquery-ui.min.js"></script>
<script>
  $( function() {
    $( "#getDate" ).datepicker();
  } );
</script>

@endsection

@section('content')
<div class="container">
  <div class="row">
  <div class="col-md-6">
    @include('errors.showmessages')
    <form class="form-horizontal" method="post" action="{{ url('/addemployee') }}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Type</label>
        <div class="col-sm-10">
          <select class="form-control" name="type" onchange="changeType(this)">
            <option value="teacher">Teacher</option>
            <option value="affairs">Student Affairs</option>
            <option value="employee">Employee</option>
          </select>
        </div>
      </div>

      <div id="teacher-info">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Subject</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{old('subject')}}">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Grade</label>
          <div class="col-sm-10">
           <label class="checkbox-inline">
              <input type="checkbox" name="g1" value="1"> 1
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="g2" value="2"> 2
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="g3" value="3"> 3
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="g4" value="4"> 4
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="g5" value="5"> 5
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="g6" value="6"> 6
            </label>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Bio</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="bio">{{old('bio')}}</textarea>
          </div>
        </div>
      </div>


       <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Register</button>
        </div>
      </div>      
    </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
  var html = '<div id="teacher-info"><div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">Subject</label><div class="col-sm-10"><input type="text" class="form-control" name="subject" placeholder="Subject"></div></div><div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">Bio</label><div class="col-sm-10"><textarea class="form-control" name="bio"></textarea></div></div></div>';
  function changeType(el){
    if(el.value != 'teacher')
      document.getElementById('teacher-info').innerHTML = "";
    else if(el.value == 'teacher')
      document.getElementById('teacher-info').innerHTML = html;
  }

</script>
@endsection