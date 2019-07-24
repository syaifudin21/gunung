<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover" style="background-color: {{env('THEME_COLOR_2')}}"></div>
    </section>
    <section class="login-content">
      <div class="login-box" style="min-height: 420px;">
        @if (Auth::guard('pengunjung')->check())
        <div class="login-form" ">

        <div class="form-group text-center">
          Anda Telah Masuk Sebagai Admin, Silahkan Klik dibawah ini untuk menuju beranda pengunjung
          <br><br>

        <a href="{{url('pengunjung')}}" class="btn btn-primary">Beranda Admin</a>

        <br><br>
        atau
        <br><br>
            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Login Distributor ?</a></p>
        </div>
      </div>
        @else
        <form class="login-form" method="post" action="{{route('pengunjung.login')}}">
          @csrf
          @if (isset($_GET['redirect']))
            <input type="hidden" name="redirect" value="{{$_GET['redirect']}}">
          @endif
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login Pengunjung</h3>
          <div class="form-group">
            <label class="control-label">Username</label>
            <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" type="text" placeholder="Email" name="username" autofocus value="{{old('username')}}">
            @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Password" name="password">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group text-center">
             
                <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-right fa-fw"></i> Daftar Pengjunjung</a></p>
              </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>{{ __('Login') }}</button>
          </div>
        </form>
        @endif

        <form class="forget-form" method="POST" action="{{route('pengunjung.daftar')}}" aria-label="{{ __('Daftar Pengunjung') }}">
            @csrf
            @if (isset($_GET['redirect']))
            <input type="hidden" name="redirect" value="{{$_GET['redirect']}}">
            @endif
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Daftar Pengunjung</h3>
            <div class="form-group">
              <input class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" type="text" placeholder="Nama" name="nama" autofocus value="{{old('nama')}}">
              @if ($errors->has('nama'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('nama') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" type="text" placeholder="Username" name="username" autofocus value="{{old('username')}}">
              @if ($errors->has('username'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('username') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <input class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" type="text" placeholder="Alamat" name="alamat" autofocus value="{{old('alamat')}}">
              @if ($errors->has('alamat'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('alamat') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Password" name="password">
              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <div class="text-center">
                  <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Login Pengunjung</a></p>
              </div>
            </div>
            <div class="form-group btn-container">
              <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>{{ __('Daftar User Pengunjung') }}</button>
            </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    </script>

    
    @if(Session::has('alert'))
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script>
        swal({
        {!!Session::get('alert')!!}
        });
    </script>
    @endif
  </body>
</html>
