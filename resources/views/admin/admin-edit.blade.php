@extends('admin.admin-template')
@section('css')

@endsection
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>Gunung Indonesia</h1>
            <p>Management User</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
			<div class="tile">
			  <div class="tile-body">
				<form class="form-horizontal" id="submit-form" method="post" action="{{route('admin.user.update')}}">
                {{ csrf_field() }}
                @method('PUT')
                <input type="hidden" name="id" value="{{$user->id}}">

                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="username" id="staticEmail" placeholder="Username User" value="{{$user->username}}">
                                    @if ($errors->has('username'))
                                        <small class="form-text text-muted">{{ $errors->first('username') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" id="staticEmail" placeholder="Password User" value="{{old('password')}}">
                                    @if ($errors->has('password'))
                                        <small class="form-text text-muted">{{ $errors->first('password') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Confirmation Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password_confirmation" id="staticEmail" placeholder="Password User" value="{{old('password')}}">
                                    @if ($errors->has('password'))
                                        <small class="form-text text-muted">{{ $errors->first('password') }}</small>
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
					<button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('submit-form').submit();"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
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
