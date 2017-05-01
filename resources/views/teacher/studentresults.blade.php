@extends('layouts.app')

@section('title')
Student Results
@endsection

@section('style')
input{
	width:100px;
}
@endsection

@section('content')
<div class="container">
	<div class="row">
	  <div class="col-lm-12">
	  	<div class="student-info">
	        <h3>Name: {{ucwords($student->name)}} {{ucwords($student->parent->name)}}</h3>
	        <h3>grade: {{ucwords($student->grade)}}</h>        
	    </div>
	    @include('errors.showmessages')
	    <form class="form-horizontal" action="{{url('/teacher/student/postresult/'.$student->id)}}" method="post">
	    <table class="table table-hover">
		{{ csrf_field() }}		   
	      <thead>
	        <tr>
	          <th>Month</th>
	          <th>Arabic</th>
	          <th>English</th>
	          <th>Math</th>
	          <th>Science</th>
	          <th>History</th>
	          <th>Arts</th>
	          <th>Computer</th>
	        </tr>
	      </thead>
	        <tbody>
	          <tr>
	            @if($result !== null)
		            <td>
		            	<select name="type">
		            		<option @if($result->type == 'Jan') selected @endif value="Jan">Jan</option>
		            		<option @if($result->type == 'Feb') selected @endif value="Feb">Feb</option>
		            		<option @if($result->type == 'Mar') selected @endif value="Mar">Mar</option>
		            		<option @if($result->type == 'Apr') selected @endif value="Apr">Apr</option>
		            		<option @if($result->type == 'May') selected @endif value="May">May</option>
		            		<option @if($result->type == 'Jun') selected @endif value="Jun">Jun</option>
		            		<option @if($result->type == 'Jan') selected @endif value="Jan">Jan</option>
		            		<option @if($result->type == 'Jul') selected @endif value="Jul">Jul</option>
		            		<option @if($result->type == 'Aug') selected @endif value="Aug">Aug</option>
		            		<option @if($result->type == 'Sep') selected @endif value="Sep">Sep</option>
		            		<option @if($result->type == 'Nov') selected @endif value="Nov">Nov</option>
		            		<option @if($result->type == 'Dec') selected @endif value="Dec">Dec</option>
		            		
		            	</select>
		            </td>
	            
		            <td><input type="number" step="0.01" name="arabic" value="{{$result->arabic}}"></td>
		            <td><input type="number" step="0.01" name="english" value="{{$result->english}}"></td>
		            <td><input type="number" step="0.01" name="math" value="{{$result->math}}"></td>
		            <td><input type="number" step="0.01" name="science" value="{{$result->science}}"></td>
		            <td><input type="number" step="0.01" name="history" value="{{$result->history}}"></td>
		            <td><input type="number" step="0.01" name="arts" value="{{$result->arts}}"></td>
		            <td><input type="number" step="0.01" name="computer" value="{{$result->computer}}"></td>
		        @else
			        <td>
			        <select name="type">
		            		<option value="Jan">Jan</option>
		            		<option value="Feb">Feb</option>
		            		<option value="Mar">Mar</option>
		            		<option value="Apr">Apr</option>
		            		<option value="May">May</option>
		            		<option value="Jun">Jun</option>
		            		<option value="Jan">Jan</option>
		            		<option value="Jul">Jul</option>
		            		<option value="Aug">Aug</option>
		            		<option value="Sep">Sep</option>
		            		<option value="Nov">Nov</option>
		            		<option value="Dec">Dec</option>
		            	</select>
		            </td>	            
		        	<td><input type="number" step="0.01" name="arabic" value="0.00"></td>
		            <td><input type="number" step="0.01" name="english" value="0.00"></td>
		            <td><input type="number" step="0.01" name="math" value="0.00"></td>
		            <td><input type="number" step="0.01" name="science" value="0.00"></td>
		            <td><input type="number" step="0.01" name="history" value="0.00"></td>
		            <td><input type="number" step="0.01" name="arts" value="0.00"></td>
		            <td><input type="number" step="0.01" name="computer" value="0.00"></td>
	            @endif

	           </tr>	           
	        </tbody>
	      </table>	      
	        	<button type="submit" style="background-color: #2abb9b" class="btn btn-success">Submit Result</button>
	        </from>
	      
	  </div>
	 </div>
</div>
@endsection
