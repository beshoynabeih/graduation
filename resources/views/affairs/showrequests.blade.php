@extends('layouts.app')

@section('title')
User Requests
@endsection

@section('style')
.small-text{
	font-size: 14px;
    font-style: italic;
}
.request-content{
	padding: 10px;
    background-color: #eee;
    border-radius: 10px;
    margin-bottom: 5px;
}
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			@forelse($contacts as $contact)
				<div class="request-content">
					<h3>{{$contact->subject}}</h3>
					<p class="small-text">{{$contact->name}}, {{$contact->email}}</p>
					<h4>{{$contact->content}}</h4>
				</div>
			@empty
			<div class="alert alert-info lead text-center">There are no request to show</div>
			@endforelse	
		</div>
	</div>
</div>

@endsection