@extends('pengunjung.pengunjung-template')
@section('css')

@endsection
@section('content')
<main class="app-content">
    <div class="app-title">

            <div class="media">
            <div class="media-body">
            <a href="{{route('pengunjung.profil',['username'=>$profil->username])}}" style="text-decoration: none"><h5 class="mt-0">{{$profil->nama}}</h5></a>
                {{$profil->alamat}}
            </div>
            </div>

    </div>

    <div class="row justify-content-md-center">
            <div class="col-md-6 col-sm-12">
                <div class="tile mb-1">
                    <div class="page-header">
                        <h6 class="mb-3 line-head" id="containers">Berita yang dibuat User {{$profil->nama}}</h6>
                    </div>
                    <div class="bs-component">
                        @foreach ($profil->berita()->get() as $berita)
                            
                        <div class="media">
                            <img src="{{asset($berita->lampiran)}}" class="mr-3" alt="" width="64px">
                            <div class="media-body">
                            <a href="{{route('pengunjung.berita.show', ['id'=>$berita->id])}}"><h5 class="mt-0">{{$berita->judul}}</h5></a>
                            <small>Oleh : {!!empty($berita->pengunjung_id)? 'Admin' : '<a href="'. route('pengunjung.profil', ['username'=> $berita->pengunjung->username]).'">'.$berita->pengunjung->nama.'</a>'!!}</small> <br>
                            {{$berita->text_pembuka}}
                            </div>
                        </div><br>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6"></div>
    </div>
</main>

@endsection

@section('script')
<script src="{{asset('js/hapus.js')}}"></script>
@endsection
