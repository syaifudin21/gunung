@extends('admin.admin-template')
@section('css')

@endsection
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>{{env("APP_NAME")}}</h1>
            <p>Informasi deskripsi User yang ada di Indonesia</p>
        </div>
        <div class="btn-group float-right" role="group" aria-label="Basic example">
            <a class="btn btn-primary mr-1 mb-1 btn-sm" href="{{route('admin.user.create')}}">
                <i class="fa fa-plus"></i>Tambah User</a> 
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="tile">
                <h3 class="tile-title">Daftar User</h3>
                <div class="bs-component">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td><b>{{$user->username}}</b></td>
                                <td class="text-center">
                                    <a class="btn btn-outline-secondary btn-sm" href="{{route('admin.user.edit', ['id'=>$user->id])}}">Edit</a>

                                    <button onClick="hapus('{{route('admin.user.delete', ['id'=> $user->id])}}', 'User Admin yakin ingin dihapus')" class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
</main>


@endsection

@section('script')
<script src="{{asset('js/hapus.js')}}"></script>
<script src="{{asset('js/hapusfunc.js')}}"></script>
@endsection
