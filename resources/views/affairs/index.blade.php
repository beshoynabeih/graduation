@extends('layouts.app')

@section('content')
<div class="container">
  @include('errors.showmessages')
  <div class="select-grade">
    <form method="get" action="{{url('/getgradestudents')}}" class="navbar-form navbar-left">
         
          <select class="form-control" name="select_grade" onchange="this.form.submit()">
            <option selected value="all grades">All Students</option>
            <option @if($grade == 'first grade') selected @endif value="first grade">First Grade</option>
            <option @if($grade == 'second grade') selected @endif value="second grade">Second Grade</option>
            <option @if($grade == 'third grade') selected @endif value="third grade">Third Grade</option>
            <option @if($grade == 'fourth grade') selected @endif value="fourth grade">Fourth Grade</option>
            <option @if($grade == 'fifth grade') selected @endif value="fifth grade">Fifth Grade</option>``
            <option @if($grade == 'sixth grade') selected @endif value="sixth grade">Sixth Grade</option>
          </select>
        <div class="form-group">
          <input type="text" class="form-control" name="searchvalue" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ url('/addstudent') }}" class="btn btn-info">Add Student</a>
        <a href="{{ url('/affairs/updatetables') }}" class="btn btn-info">Update Tables</a>
        <a href="{{ url('/affairs/showrequests') }}" class="btn btn-info">Show Request</a>
    </form>
  </div>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Student Name</th>
          <th>Parent Name</th>
          <th>Grade</th>
          <th>Birthday</th>
          <th>Fees</th>
          <th>Actions</th>
        </tr>
      </thead>
        <tbody>
          @forelse($students as $student)
            <tr>
              <th scope="row">{{$student->id}}</th>
              <td>{{ucwords($student->name)}}</td>
              <td>{{$student->parent->name }}</td>
              <td>{{ ucwords($student->grade) }}</td>
              <td>{{$student->birthday}}</td>
              <td>
                @if($student->fees) 
                  <span style="color:green">Yes</span>
                @else
                  <span style="color:red">No</span>
                @endif 
              </td>
              <td>
                <a class="btn btn-primary" href="{{url('/student/edit/'.$student->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{url('/student/delete\/').$student->id}}">Delete</a>
                @if(!$student->fees)
                <a class="btn btn-success" href="{{url('/student/payfees\/').$student->id}}">Pay Fees</a>
                @endif
                <a class="btn btn-success" href="{{url('/student/result\/').$student->id}}">Results</a>
                <a class="btn btn-info" href="{{url('/student/sendnotification\/').$student->id}}">Send Notification</a>
              </td>
            </tr>
          @empty
          <tr>
            <td colspan="7"><div class="text-center lead alert alert-info">There are no students to show.</div></td>
          </tr>
          @endforelse
        </tbody>
      </table>
<div style="text-align:center">

  {{$students->links()}}
</div>

</div>
@endsection
