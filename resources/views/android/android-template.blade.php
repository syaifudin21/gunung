<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{asset(env('APP_LOGO'))}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    @yield('css')
  </head>
  <body>
    <div class="container-fluid">
        @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}" ></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @if(Session::has('alert'))
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script>
        swal({
          {!!Session::get('alert')!!}
        });
    </script>
    @endif
    
    @yield('script')
   </body>
</html>
