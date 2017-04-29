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
        <form class="form-inline" method="get" action="{{ url('/updatetables') }}">
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
  <div class="row">
    @include('errors.showmessages')
    <form class="" action="{{ url('/posttable') }}" method="post">
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
            <!-- <tr>
              <th scope="row"><input type="text" name="d1" value="Sat"/> </th>
              <td> <input type="text" name="d1l1" value="English"></td>
              <td><input type="text" name="d1l2" value="Math"></td>
              <td><input type="text" name="d1l3" value="Science"></td>
              <td><input type="text" name="d1l4" value="Geography"></td>
              <td><input type="text" name="d1l5" value="Arabic"></td>
              <td><input type="text" name="d1l6" value="Computer"></td>
              <td><input type="text" name="d1l7" value="Art"></td>
            </tr>
            <tr>
              <th scope="row"><input type="text" name="d2" value="Sun"/> </th>
              <td> <input type="text" name="d2l1" value="English"></td>
              <td><input type="text" name="d2l2" value="Math"></td>
              <td><input type="text" name="d2l3" value="Science"></td>
              <td><input type="text" name="d2l4" value="Geography"></td>
              <td><input type="text" name="d2l5" value="Arabic"></td>
              <td><input type="text" name="d2l6" value="Computer"></td>
              <td><input type="text" name="d2l7" value="Art"></td>
            </tr>
            <tr>
              <th scope="row"><input type="text" name="d3" value="Mon"/> </th>
              <td> <input type="text" name="d3l1" value="English"></td>
              <td><input type="text" name="d3l2" value="Math"></td>
              <td><input type="text" name="d3l3" value="Science"></td>
              <td><input type="text" name="d3l4" value="Geography"></td>
              <td><input type="text" name="d3l5" value="Arabic"></td>
              <td><input type="text" name="d3l6" value="Computer"></td>
              <td><input type="text" name="d3l7" value="Art"></td>
            </tr>
            <tr>
              <th scope="row"><input type="text" name="d4" value="Tues"/> </th>
              <td> <input type="text" name="d4l1" value="English"></td>
              <td><input type="text" name="d4l2" value="Math"></td>
              <td><input type="text" name="d4l3" value="Science"></td>
              <td><input type="text" name="d4l4" value="Geography"></td>
              <td><input type="text" name="d4l5" value="Arabic"></td>
              <td><input type="text" name="d4l6" value="Computer"></td>
              <td><input type="text" name="d4l7" value="Art"></td>
            </tr>
            <tr>
              <th scope="row"><input type="text" name="d5" value="Wedn"/> </th>
              <td> <input type="text" name="d5l1" value="English"></td>
              <td><input type="text" name="d5l2" value="Math"></td>
              <td><input type="text" name="d5l3" value="Science"></td>
              <td><input type="text" name="d5l4" value="Geography"></td>
              <td><input type="text" name="d5l5" value="Arabic"></td>
              <td><input type="text" name="d5l6" value="Computer"></td>
              <td><input type="text" name="d5l7" value="Art"></td>
            </tr>
            <tr>
              <th scope="row"><input type="text" name="d6" value="Thur"/> </th>
              <td> <input type="text" name="d6l1" value="English"></td>
              <td><input type="text" name="d6l2" value="Math"></td>
              <td><input type="text" name="d6l3" value="Science"></td>
              <td><input type="text" name="d6l4" value="Geography"></td>
              <td><input type="text" name="d6l5" value="Arabic"></td>
              <td><input type="text" name="d6l6" value="Computer"></td>
              <td><input type="text" name="d6l7" value="Art"></td>
            </tr> -->
          </tbody>
        </table>
        <input type="hidden" name="grade" value="{{ $lectures[0]->grade }}">
        <input class="submit" type="submit" name="submit" value="Update">

        </form>
  </div>
</div>
@endsection
