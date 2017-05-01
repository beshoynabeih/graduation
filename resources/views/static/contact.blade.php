@extends('layouts.app')

@section('content')
<div class="about">
  <div class="container">
    <section class="title-section">
      <h1 class="title-header">Contact Us</h1>
    </section>
  </div>
</div>
<div class="contact">
  <div class="container">
    <div class="row contact_top">
      <div class="col-md-4 contact_details">
        <h5>Mailing address:</h5>
        <div class="contact_address">Minia, Taha hussen</div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Call us:</h5>
        <div class="contact_address"> 02 01273531574<br>
        </div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Email us:</h5>
        <div class="contact_mail"> beshoybosha231@gmail.com</div>
      </div>
    </div>
    <div class="contact_bottom">
      <h3>Contact Form</h3>
      @include('errors.showmessages')
     
      <form method="post" action="{{url('/contact/postrequest')}}">
      {{ csrf_field() }}
        <div class="contact-to">
          <input type="text" class="text" value="{{old('name')}}" name="name" placeholder="Name">
          <input type="text" class="text" value="{{old('email')}}" name="email" placeholder="Email">
          <input type="text" class="text" value="{{old('subject')}}" name="subject" placeholder="Subject">
        </div>
        <div class="text2">
          <textarea name="content">@if(old('content')){{old('content')}} @else message... @endif</textarea>
        </div>
        <div> <button type="submit" class="submit">Send Message</button> </div>
      </form>
    </div>
  </div>
</div>
@endsection
