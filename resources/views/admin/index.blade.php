@extends('layouts.app')

@section('content')
<div class="container">
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
        <a href="{{ url('/updatetables') }}" class="btn btn-default">Update Tables</a>
      </form>
  </div>
  <table class="table table-hover">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th>Grade</th>
          <th>Fees</th>
          <th>Actions</th>
        </tr>
      </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>First Year</td>
            <td>Yes</td>
            <td>
              <a class="btn btn-primary" href="#">Edit</a>
              <a class="btn btn-danger" href="#">Delete</a>
              <a class="btn btn-success" href="#">Results</a>
              <a class="btn btn-info" href="#">Send Notification</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Second Year</td>
            <td>Yes</td>
            <td>
              <a class="btn btn-primary" href="#">Edit</a>
              <a class="btn btn-danger" href="#">Delete</a>
              <a class="btn btn-success" href="#">Results</a>
              <a class="btn btn-info" href="#">Send Notification</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Second Year</td>
            <td><span style="color:red" class="impor">No</span></td>
            <td>
              <a class="btn btn-primary" href="#">Edit</a>
              <a class="btn btn-danger" href="#">Delete</a>
              <a class="btn btn-success" href="#">Results</a>
              <a class="btn btn-info" href="#">Send Notification</a>
            </td>
          </tr>
        </tbody>
      </table>
  </table>
</div>
@endsection
