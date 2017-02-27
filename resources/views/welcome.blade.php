<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/favicon.ico') }}"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.css">
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>@yield('title', 'CAM - Credit Account Managment')</title>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid app-nav text-center">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('/img/logo.png') }}" alt="Logo" class="img-responsive" width="50">
          </a>
        </div>        
        <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
          <span class="title-app">CAM</span>
        </div>
        <div class="hidden-xs col-md-12">
          <span class="title-app">CAM (Credit Account Managment)</span>
        </div>
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
      @yield('content')
    </div>
      

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/vendor/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>
