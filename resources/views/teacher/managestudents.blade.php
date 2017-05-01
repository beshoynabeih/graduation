@extends('layouts.app')

@section('title')
Manage Students
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
		@include('errors.showmessages')
			<table class="table table-hover">
		      <thead>
		        <tr>
		          <th>ID</th>
		          <th>Student Name</th>
		          <th>Grade</th>
		          <th>Birthday</th>
		          <th>Actions</th>
		        </tr>
		      </thead>
		        <tbody>
		          @forelse($studentss as $students)
		          	@foreach($students as $student)
		            <tr>
		              <th scope="row">{{$student->id}}</th>
		              <td>{{ucwords($student->name)}}</td>
		              <td>{{ ucwords($student->grade) }}</td>
		              <td>{{$student->birthday}}</td>
		              
		              <td>
		                <a class="btn btn-success" href="{{url('/teacher/student/result\/').$student->id}}">Results</a>
		                <a class="btn btn-info" href="{{url('/teacher/student/sendnotification\/').$student->id}}">Send Notification</a>
		              </td>
		            </tr>
		            @endforeach
		          @empty
		          <tr>
		            <td colspan="5"><div class="text-center lead alert alert-info">There are now students to show.</div></td>
		          </tr>
		          @endforelse
		        </tbody>
		      </table>
		</div>
	</div>
</div>
@endsection