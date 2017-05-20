<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link href="{{url('images/favicon.png')}}" rel="shortcut icon" />
<link href="{{url('css/bootstrap.min.css')}} " rel="stylesheet" />
<link href="{{url('css/flexslider.css')}}" rel="stylesheet" />
<link href="{{url('css/style.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{url('css/custom.css')}}">
<script src="{{url('js/jquery.min.js')}}"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<style>
@yield('style')
</style>
@yield('header')
</head>
<body>
<div class="header">
  <div class="container"> <a class="navbar-brand" href="{{ url('/') }}"><img id="logo-img" src="{{url('images/favicon.png')}}"/></a>
    <div class="menu"> <a class="toggleMenu" href="#"><img src="{{url('images/nav_icon.png')}}" alt="" /> </a>
      <ul class="nav" id="nav">
        <li ><a href="{{ url('/') }}">Home</a></li>
        <li ><a href="{{ url('/teachers') }}">Teachers</a></li>
        <li ><a href="{{ url('/tables') }}">Tables</a></li>
        <li ><a href=" {{ url('/about') }}">About Us</a></li>
        <li ><a href="{{ url('contact') }}">Contact Us</a></li>
        @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              @if(Auth::user()->type == 4)
              <li><a href="{{ url('/admin') }}"></i>Dashboard</a></li>
              <li><a href="{{ url('/updatetables') }}"></i>Update Tables</a></li>

              <li><a href="{{ url('/addemployee') }}"></i>Add Employee</a></li>
              @endif
              @if(Auth::user()->type == 3)
              <li><a href="{{ url('/affairs') }}"></i>Dashboard</a></li>
              @endif
              @if(Auth::user()->type == 2)
              <li><a href="{{ url('/teacher') }}"></i>Dashboard</a></li>
              @endif
              @if(Auth::user()->type == 1)
              <li><a href="{{ url('/parent') }}"></i>Dashboard</a></li>
              @endif
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
          </li>
        @endif
        <div class="clear"></div>
      </ul>
      <script type="text/javascript" src="{{url('js/responsive-nav.js')}}"></script>
    </div>
  </div>
</div>

@yield('content')

<div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
    <div class="copy">
      <p>Copyright &copy; 2016. Design by <a href="Project-team.html" rel="nofollow">Project Team</a></p>
    </div>
  </div>
</div>
<script>
document.getElementById("logo-img").onmouseover = function(){
	document.getElementById("logo-img").setAttribute("src", "{{url('images/favicon2.png')}}");
};
document.getElementById("logo-img").onmouseout = function(){
	document.getElementById("logo-img").setAttribute("src", "{{url('images/favicon.png')}}");
};
</script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/jquery.flexslider.js')}}"></script>
@yield('scripts')
</body>
</html>
