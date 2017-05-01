@extends('layouts.app')

@section('title')
Answer Question
@endsection
@section('style')
.question{
	padding: 10px;
    background-color: #EEE;
    margin-bottom: 10px;
}
.small-text{
	font-size: 15px;
    font-style: italic;
}
@endsection
@section('content')
<div class="container">
	<div class="row">
		<dir class="col-md-12">
		@include('errors.showmessages')
			@forelse($questions as $question)
				<div class="question">
					<form method="post" action="{{url('/teacher/answer').'/'.$question->id}}">
					{{ csrf_field() }}
						<h3>{{$question->title}} </h3>
						<p class="small-text">Student Name: {{$question->student[0]->name}}</p>
						<p>{{$question->question}}</p>
						<input type="hidden" name="studentID" value="{{$question->student[0]->id}}">
						<textarea name='answer' style="max-width:510px; min-width: 510px; border-radius: 5px;"></textarea><br>
						<button type="submit" class="btn btn-info">Answer</button>
					</form>
				</div>
			@empty

			<div class="alert alert-info lead text-center">No Question to show.</div>
			@endforelse
		</dir>
	</div>
</div>
@endsection