@if(isset($student))
@extends('layouts.app')

@section('title')
Edit | {{ $student->name }}
@endsection

@section('header')
<link rel="stylesheet" href="{{url('css/jquery-ui.min.css')}}">
<script src="{{url('js/jquery-ui.min.js')}}"></script>
<script>
  $(function() {
    $( "#getDate" ).datepicker();
  });
</script>

@endsection

@section('content')
<div class="container">
  <div class="contact_bottom">
    @include('errors.showmessages')
    <form method="post" action="{{ url('/student/update') }}">
      {{ csrf_field() }}
      <div class="contact-to">
        <h3>Parent Info</h3>
        <input type="text" class="text" name="parent_name" value="{{ $student->parent->name }}" placeholder="Parent Name">
        <input type="text" class="text" name="email" value="{{$student->parent->email}}" placeholder="Email">
        Change password <input type="checkbox" name="ch_password" id="passch">
        <input type="text" id="password" disabled class="text" name="password" value="{{old('password')}}" placeholder="Password">
        <input type="text" id="conpassword" disabled class="text" name="con_password" value="{{old('con_password')}}" placeholder="Password Confirmation">

        <h3>Student Info</h3>
        <input type="text" class="text" name="student_name" value="{{$student->name}}" placeholder="Student Name">

        <select style="height:41px" name="grade">
          <option @if($student->grade == 'first grade') selected @endif value="first grade">First Grade</option>
          <option @if($student->grade == 'second grade') selected @endif value="second grade">Second Grade</option>
          <option @if($student->grade == 'third grade') selected @endif value="third grade">Third Grade</option>
          <option @if($student->grade == 'fourth grade') selected @endif value="fourth grade">Fourth Grade</option>
          <option @if($student->grade == 'fifth grade') selected @endif value="fifth grade">Fifth Grade</option>``
          <option @if($student->grade == 'sixth grade') selected @endif value="sixth grade">Sixth Grade</option>
        </select>

        <input type="text" id="getDate" name="birthday" class="text" value="{{$student->birthday}}" placeholder="Birthday"/>
        <input type="text"  name="address" class="text" value="{{$student->address}}" placeholder="Address"/>
        <input type="hidden" name="id" value="{{$student->id}}">
      </div>
      <div class="clearfix"></div>
      <div> <button href="#" class="submit" style="margin:0 0 10px 0">Update</button> </div>
    </form>
  </div>
</div>

@endsection


@section('scripts')
<script>
	var passch = document.getElementById('passch');
	passch.onchange = function(){
		if(passch.checked){
			$("#password").prop("disabled", false);
			$("#conpassword").prop("disabled", false);
		}
		if(!passch.checked){
			$("#password").prop("disabled", true);
			$("#conpassword").prop("disabled", true);
		}
	}
</script>
@endsection
@else
@include('errors.404')
@endif

