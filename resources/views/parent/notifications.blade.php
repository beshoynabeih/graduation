@extends('layouts.app')

@section('title')
Parent Notifications
@endsection

@section('header')
<link rel="stylesheet" href="{{url('css/home.css')}}">
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table>
		        <tbody class="notes_table">

		       	 @forelse($notes as $note)
		          <tr>
		            <td class="note_id">{{$note->id}}</td>
		            <td class="note_img"><img src="{{url('images/notes/note1.jpg')}}" /></td>
		            <td>
		              <div class="note_content">
		                <h4>{{$note->type}}</h4>
		                <p>{{$note->content}}</p>
		                <h4>Answer:</h4>
		                <p>{{$note->question->answer->answer}}</p>
		              </div>
		            </td>
		          </tr>
		          @empty
		          <div class="alert alert-info">No Notifications to show</div>
		          @endforelse
		        </tbody>
		      </table>
		</div>
	</div>
</div>
@endsection