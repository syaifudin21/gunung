@extends('admin.admin-template')
@section('css')

@endsection
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>{{env("APP_NAME")}}</h1>
            <p>Informasi User Pengunjung </p>
        </div>
        <div class="btn-group float-right" role="group" aria-label="Basic example">
            <a class="btn btn-primary mr-1 mb-1 btn-sm" href="{{route('admin.pengunjung.create')}}">
                <i class="fa fa-plus"></i>Tambah User Pengunjung</a> 
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="tile">
                <h3 class="tile-title">Daftar User Pengunjung</h3>
                <div class="bs-component">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Nama Pengunjung</th>
                                <th>Username</th>
                                <th>Alamat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengunjungs as $pengunjung)
                            <tr>
                                <td><b>{{$pengunjung->nama}}</b></td>
                                <td><b>{{$pengunjung->username}}</b></td>
                                <td><b>{{$pengunjung->alamat}}</b></td>
                                <td class="text-center">
                                    <a class="btn btn-outline-secondary btn-sm" href="{{route('admin.pengunjung.edit', ['id'=>$pengunjung->id])}}">Edit</a>
                                    <button onClick="hapus('{{route('admin.pengunjung.delete', ['id'=> $pengunjung->id])}}', 'Berita yakin ingin dihapus')" class="btn btn-danger btn-sm">Hapus</button>
                             
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
<script src="{{asset('js/hapusfunc.js')}}"></script>
@endsection
