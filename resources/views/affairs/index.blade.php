@extends('layouts.app')

@section('content')
<div class="container">
  @include('errors.showmessages')
  <div class="select-grade">
  <form class="navbar-form navbar-left">
    <div style="display:inline-block" class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Select Grade
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
        <li><a href="#">First Yeat</a></li>
        <li><a href="#">Second Year</a></li>
        <li><a href="#">Third Year</a></li>
        <li><a href="#">Fourth Year</a></li>
        <li><a href="#">Fifth Year</a></li>
        <li><a href="#">Sixth Year</a></li>
      </ul>
  </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ url('/addstudent') }}" class="btn btn-info">Add Student</a>
      </form>
  </div>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Grade</th>
          <th>Actions</th>
        </tr>
      </thead>
        <tbody>
          @foreach($students as $student)
            <tr>
              <th scope="row">{{$student->id}}</th>
              <td>{{ucwords($student->name)}}</td>
              <td>{{$student->parent()->name }}</td>
              <td>{{ ucwords($student->grade) }}</td>
              <td>
                <a class="btn btn-primary" href="#">Edit</a>
                <a class="btn btn-danger" href="#">Delete</a>
                <a class="btn btn-success" href="#">Edit Fees</a>
                <a class="btn btn-info" href="#">Send Notification</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
<div style="text-align:center">

  {{$students->links()}}
</div>

</div>
@endsection
