@extends('layouts.app')

@section('title')
Send Notification
@endsection

@section('content')
<div class="container">
	<div class="row">
	<div class="col-md-6">
	@include('errors.showmessages')
		<form class="form-horizontal" action="{{url('/student/sendnotification/'.$id)}}" method="post">
		{{ csrf_field() }}
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Type</label>
			    <div class="col-sm-10">
			      <select class="form-control" name="notetype">
			      	<option value="congratulation">congratulation</option>
			      	<option value="warning">Warning</option>
			      </select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Content</label>
			    <div class="col-sm-10">
			      <textarea name="notecontent" style="max-width: 457.5px" class="form-control">{{old('notecontent')}}</textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button style="margin-top:0" type="submit" class="submit">Send Notification</button>
			    </div>
			  </div>
		</form>
		</div>
	</div>
</div>
@endsection