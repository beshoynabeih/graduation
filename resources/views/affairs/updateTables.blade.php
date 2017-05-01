@extends('layouts.app')

@section('title')
Update Tables
@endsection

@section('style')
input{
  width:100px !important;
  text-align:center;
}
.submit{
  margin-top:0 !important;
  margin-left:10px !important;
}
.select-grade{
  margin:10px -10px;
}
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="select-grade">
        <form class="form-inline" method="get" action="{{ url('/affairs/updatetables') }}">
          {{ csrf_field() }}
          <select class="form-control" name="select_grade" onchange="this.form.submit()">
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
  <div class="row">
    @include('errors.showmessages')
    <form class="" action="{{ url('/affairs/posttable') }}" method="post">
      {{ csrf_field() }}
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
                <th scope="row"><input type="text" name="d{{$index+1}}" value="{{ $lectures[$index]->day }}"/> </th>
                <td> <input type="text" name="d{{$index+1}}l1" value="{{ $lectures[$index]->lec1 }}"></td>
                <td><input type="text" name="d{{$index+1}}l2" value="{{ $lectures[$index]->lec2 }}"></td>
                <td><input type="text" name="d{{$index+1}}l3" value="{{ $lectures[$index]->lec3 }}"></td>
                <td><input type="text" name="d{{$index+1}}l4" value="{{ $lectures[$index]->lec4 }}"></td>
                <td><input type="text" name="d{{$index+1}}l5" value="{{ $lectures[$index]->lec5 }}"></td>
                <td><input type="text" name="d{{$index+1}}l6" value="{{ $lectures[$index]->lec6 }}"></td>
                <td><input type="text" name="d{{$index+1}}l7" value="{{ $lectures[$index]->lec7 }}"></td>
              </tr>
              @endfor
            @endif           
          </tbody>
        </table>
        <input type="hidden" name="grade" value="{{ $lectures[0]->grade }}">
        <input class="submit" type="submit" name="submit" value="Update">

        </form>
  </div>
</div>
@endsection
