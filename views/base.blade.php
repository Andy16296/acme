<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('browsertitle')Acme</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/styles.css">

    @yeild('css')

  </head>

  <body>


@include ('topnav')
@yield('outsidecontainer')

    <div class="container">
      <div class="row">
        <br><br>
        @include('errormessage')
      </div>

    @yield('content')


    </div>


    <div class="row footer-background">
        <div class="col-md-3">
          <div class="padding-left-8px">
                <h4> Contact Us </h4>
                123 Main St,<br>
                UniteTheUnion, DE<br>
                76543<br>
                +44 (444) 673-1232
          </div>
        </div>
        <div class="col-md-6">
        </div>

        <div class="col-md-3">
          <img src="/assets/map-small.png" class="pull-right">
        </div>
    </div>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


@yield ('bottomjs')

  </body>
</html>
