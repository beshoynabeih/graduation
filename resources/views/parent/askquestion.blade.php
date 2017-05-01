@extends('layouts.app')

@section('title')
Ask Question
@endsection

@section('content')
<div class="container">
	<div class="row">
	@include('errors.showmessages')
	  <div class="contact_bottom">
	    <form method="post" action="{{url('/parent/postquestion')}}">
	    {{ csrf_field() }}
	      <div class="contact-to">
	        <input type="text" class="text" value="{{old('title')}}" placeholder="Title" name="title">
	      </div>
	      <select name="teacherName">
	      	@foreach($teachers as $teacher)
	      	<option value="{{$teacher->user->id}}">{{$teacher->user->name}} : {{$teacher->subject}}</option>
	      	@endforeach
	      </select>
	      <div class="text2">
	        <textarea name="question" placeholder="Question Details"></textarea>
	      </div>
	      <div class="clearfix"></div>
	      <div> <button type="submit" class="submit" style="margin:0 0 10px 0">Submit</button> </div>
	    </form>
	  </div>
	</div>
</div>
@endsection