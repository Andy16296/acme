@extends('base')

@section('css')
<style>
.carousel {
  width: 100%;
  margin-top: 50px;
}
</style>

@stop

@section('outsidecontainer')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/assets/slider/1.jpg" alt="image 1">
      <div class="carousel-caption">
        Acme Nature Tours
      </div>
    </div>
    <div class="item">
      <img src="/assets/slider/2.jpg" alt="image 2">
      <div class="carousel-caption">
        Experience Nature as Never before
      </div>
    </div>
    <div class="item">
      <img src="/assets/slider/3.jpg" alt="image 3">
      <div class="carousel-caption">
        Register Now!
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop

@section('content')



        <div class="row">
          <div class="col-md-12">




          </div>
        </div>


      <div class="row">
          <div class="col-md-4 well text-center">
              <h3>About</h3>
              <span class="glyphicon glyphicon-globe bigger-icon" aria-hidden="true"></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>

          <div class="col-md-4 well empty-well text-center">
              <h3>Tours</h3>
              <span class="glyphicon glyphicon-eye-open bigger-icon" aria-hidden="true"></span>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>

          <div class="col-md-4 well text-center">
              <h3>Contact</h3>
              <span class="glyphicon glyphicon-earphone bigger-icon" aria-hidden="true"></span>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
      </div>
@stop