@extends('layouts.app')

@section('title')
Add Student
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
  <div class="contact_bottom">
    @include('errors.showmessages')
    <form method="post" action="{{ url('/postuser') }}">
      {{ csrf_field() }}
      <div class="contact-to">
        <h3>Parent Info</h3>
        <input type="text" class="text" name="parent_name" value="{{ old('parent_name')}}" placeholder="Parent Name">
        <input type="text" class="text" name="email" value="{{old('email')}}" placeholder="Email">
        <input type="text" class="text" name="password" value="{{old('password')}}" placeholder="Password">
        <h3>Student Info</h3>
        <input type="text" class="text" name="student_name" value="{{old('student_name')}}" placeholder="Student Name">

        <select style="height:41px" name="grade">
          <option  value="">Select Grade</option>
          <option value="first grade">First Grade</option>
          <option value="second grade">Second Grade</option>
          <option value="third grade">Third Grade</option>
          <option value="fourth grade">Fourth Grade</option>
          <option value="fifth grade">Fifth Grade</option>``
          <option value="sixth grade">Sixth Grade</option>
        </select>

        <input type="text" id="getDate" name="birthday" class="text" value="{{old('birthday')}}" placeholder="Birthday"/>
        <input type="text"  name="address" class="text" value="{{old('address')}}" placeholder="Address"/>

      </div>
      <div class="clearfix"></div>
      <div> <button href="#" class="submit" style="margin:0 0 10px 0">Register</button> </div>
    </form>
  </div>
</div>
@endsection
