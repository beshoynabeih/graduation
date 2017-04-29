@extends('layouts.app')

@section('content')
<div class="about">
  <div class="container">
    <section class="title-section">
      <h1 class="title-header">About Our Company</h1>
    </section>
  </div>
</div>
<div class="about_content">
  <div class="container">
    <div class="row">
      <div class="col-md-8"> <img src="images/a2.jpg" class="img-responsive" alt=""/>
        <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
        <br>
        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
      </div>
      <div class="col-md-4">
        <div class="block-heading-two">
          <h3><span>Our Advantages</span></h3>
        </div>
        <div class="panel-group" id="accordion-alt3">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3"> <i class="fa fa-angle-right"></i> Quisque cursus metus vitae pharetra auctor</a> </h4>
            </div>
            <div id="collapseOne-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3"> <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit</a> </h4>
            </div>
            <div id="collapseTwo-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3"> <i class="fa fa-angle-right"></i> Quisque cursus metus vitae pharetra auctor </a> </h4>
            </div>
            <div id="collapseThree-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3"> <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit</a> </a> </h4>
            </div>
            <div id="collapseFour-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="highlight-info">
  <div class="overlay spacer">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-smile-o fa-5x"></i>
          <h4>120+ Happy Clients</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-check-square-o fa-5x"></i>
          <h4>600+ Projects Completed</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-trophy fa-5x"></i>
          <h4>25 Awards Won</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-map-marker fa-5x"></i>
          <h4>3 Offices</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="testimonial-area">
  <div class="testimonial-solid">
    <div class="container">
      <h2>Client Testimonials</h2>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="3" class=""> <a href="#"></a> </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- John Doe -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- Jane Doe -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- John Smith -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- Linda Smith -</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
