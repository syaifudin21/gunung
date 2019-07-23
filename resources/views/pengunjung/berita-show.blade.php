@extends('pengunjung.pengunjung-template')
@section('css')

@endsection
@section('content')
<main class="app-content">
    <div class="app-title">

            <div class="media">
            <img src="{{asset($berita->gunung->thumbnail)}}" style="max-height: 55px" alt="Icon Gunung" class="mr-3">
            <div class="media-body">
            <a href="{{route('pengunjung.gunung.show',['id'=>$berita->gunung_id])}}" style="text-decoration: none"><h5 class="mt-0">{{$berita->gunung->nama}}</h5></a>
                {{$berita->gunung->alamat}}
            </div>
            </div>

            <div class="float-right">Status Publis : <b>{{$berita->publish}}</b></div>
            
    </div>

    <div class="row justify-content-md-center">
        <div class="col-md-9 col-sm-12">
			<div class="tile">
                    <div class="text-center">
                        <h3>{{$berita->judul}}</h3>
                    </div>
                    {!!$berita->berita!!}
            <div class="tile-footer">
                Terakhir diupdate {{hari_tanggal_waktu($berita->updated_at, true)}}
                @if (Auth::user('pengunjung')->id  == $berita->pengunjung_id)
                <div class="btn-group float-right" role="group" aria-label="Basic example">

                    <a class="btn btn-outline-secondary mr-1 mb-1 btn-sm" href="{{route('pengunjung.berita.edit', ['id'=> $berita->id])}}">
                    <i class="fa fa-edit"></i>Edit</a>
                    <button class="btn btn-outline-danger mr-1 mb-1 btn-sm" data-pesan="Apakah kamu yakin ingin menghapu deskripsi berita {{$berita->judul}}" data-url="{{route('pengunjung.berita.delete', ['id'=> $berita->id])}}" data-redirect="{{route('pengunjung.gunung.show', ['id'=> $berita->gunung_id])}}" id="hapus">
                    <i class="fa fa-fire"></i>Hapus</button>
                </div>
                @endif
            </div>
            </div>
        </div>

    </div>
</main>

@endsection

@section('script')
<script src="{{asset('js/hapus.js')}}"></script>
@endsection
