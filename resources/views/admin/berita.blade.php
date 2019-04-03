@extends('admin.admin-template')
@section('css')

@endsection
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>Berita Gunung Indonesia</h1>
            <p>Informasi deskripsi gunung yang ada di Indonesia</p>
        </div>
        <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-primary mr-1 mb-1 btn-sm" href="{{route('admin.berita.create')}}">
                    <i class="fa fa-plus"></i>Tambah</a> </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                    <div class="card-columns">
                            @foreach ($beritas as $berita)
                                <div class="card">
                                    @if (!empty($berita->lampiran))
                                    <a href="{{asset($berita->lampiran)}}" target="_blank"><img src="{{asset($berita->lampiran)}}" class=" card-img-top"  alt="" style="width: 100%"></a>
                                    @endif

                                    <div class="card-body">
                                        <h5 class="card-title">{{$berita->judul}}</h5>
                                        <p class="card-text">{{$berita->text_pembuka}}</p>
                                    <a href="{{route('admin.berita.show', ['id'=> $berita->id])}}" class="btn btn-danger btn-sm btn-block">Detail</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
            </div>
        </div>
    </div>
</main>


@endsection

@section('script')
<script src="{{asset('js/hapus.js')}}"></script>
@endsection
