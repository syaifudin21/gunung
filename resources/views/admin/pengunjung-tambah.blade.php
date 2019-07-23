@extends('admin.admin-template')
@section('css')

@endsection
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>{{env('APP_NAME')}}</h1>
            <p>Tambah user pengunjung</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
			<div class="tile">
			  <div class="tile-body">
				<form class="form-horizontal" id="submit-form" method="post" action="{{route('admin.pengunjung.store')}}">
                {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="{{old('nama')}}">
                                    @if ($errors->has('nama'))
                                        <small class="form-text text-muted">{{ $errors->first('nama') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="{{old('username')}}">
                                    @if ($errors->has('username'))
                                        <small class="form-text text-muted">{{ $errors->first('username') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="{{old('password')}}">
                                    @if ($errors->has('password'))
                                        <small class="form-text text-muted">{{ $errors->first('password') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="{{old('alamat')}}">
                                    @if ($errors->has('alamat'))
                                        <small class="form-text text-muted">{{ $errors->first('alamat') }}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
				</form>

			  </div>
			  <div class="tile-footer">
				<div class="row">
				  <div class="col-md-8 col-md-offset-3">
					<button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('submit-form').submit();"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
					<a class="btn btn-secondary" href="{{url()->previous()}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
				</div>
				</div>
			  </div>
			</div>
		  </div>

    </div>
</main>

@endsection

@section('script')
@endsection
