@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Students</h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="select-grade">
        <form class="form-inline" method="get" action="{{ url('/tables') }}">
          {{ csrf_field() }}
          <select class="form-control" name="select_grade">
            <option @if($lectures[0]->grade == 'first grade') selected  @endif value="first grade">First Grade</option>
            <option @if($lectures[0]->grade == 'second grade') selected  @endif value="second grade">Second Grade</option>
            <option @if($lectures[0]->grade == 'third grade') selected  @endif value="third grade">Third Grade</option>
            <option @if($lectures[0]->grade == 'fourth grade') selected  @endif  value="fourth grade">Fourth Grade</option>
            <option @if($lectures[0]->grade == 'fifth grade') selected  @endif value="fifth grade">Fifth Grade</option>``
            <option @if($lectures[0]->grade == 'sixth grade') selected  @endif value="sixth grade">Sixth Grade</option>
          </select>
          <button type="Submit" class="btn btn-success">Get Table</button>
        </form>
      </div>
    </div>
  </div>


<table class="table table-hover">
    <thead>
      <tr>
        <th>Day</th>
        <th>Lecture 1</th>
        <th>Lecture 2</th>
        <th>Lecture 3</th>
        <th>Lecture 4</th>
        <th>Lecture 5</th>
        <th>Lecture 6</th>
        <th>Lecture 7</th>
      </tr>
    </thead>
      <tbody>
        @if(count($lectures) >= 6)
          @for($index = 0; $index < 6; $index++)
          <tr>
            <th scope="row">{{ $lectures[$index]->day }} </th>
            <td>{{ $lectures[$index]->lec1 }}</td>
            <td>{{ $lectures[$index]->lec2 }}</td>
            <td>{{ $lectures[$index]->lec3 }}</td>
            <td>{{ $lectures[$index]->lec4 }}</td>
            <td>{{ $lectures[$index]->lec5 }}</td>
            <td>{{ $lectures[$index]->lec6 }}</td>
            <td>{{ $lectures[$index]->lec7 }}</td>
          </tr>
          @endfor
        @endif
      </tbody>
    </table>
</div>
@endsection
