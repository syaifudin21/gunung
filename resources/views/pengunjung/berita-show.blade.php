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
                        <h4>{{$berita->judul}}</h4>
                        {{hari_tanggal_waktu($berita->updated_at, true)}} - Oleh : {!!empty($berita->pengunjung_id)? 'Admin' : '<a href="'. route('pengunjung.profil', ['username'=> $berita->pengunjung->username]).'">'.$berita->pengunjung->nama.'</a>'!!} <br><br>
                        
                        @if ($berita->lampiran != null)
                        <img src="{{asset($berita->lampiran)}}" style="max-width: 400px" class="rounded" alt="Icon Gunung" class="mr-3"><br><br>
                        @endif

                    </div>
                    {!!$berita->berita!!}
            <div class="tile-footer">
                @if (Auth::user('pengunjung')->id  == $berita->pengunjung_id)
                <div class="btn-group float-right" role="group" aria-label="Basic example">

                    <a class="btn btn-outline-secondary mr-1 mb-1 btn-sm" href="{{route('pengunjung.berita.edit', ['id'=> $berita->id])}}">
                    <i class="fa fa-edit"></i>Edit</a>
                    <button class="btn btn-outline-danger mr-1 mb-1 btn-sm" data-pesan="Apakah kamu yakin ingin menghapu deskripsi berita {{$berita->judul}}" data-url="{{route('pengunjung.berita.delete', ['id'=> $berita->id])}}" data-redirect="{{route('pengunjung.gunung.show', ['id'=> $berita->gunung_id])}}" id="hapus">
                    <i class="fa fa-fire"></i>Hapus</button>
                </div>
                <hr>
                @endif


                <ul class="list-unstyled">
                    <li class="media">
                        <i class="fa fa-user-o fa-3x mr-3"></i>
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">{{Auth::user()->nama}}</h5>
                        <form action="{{route('pengunjung.komentar.store')}}" method="post">@csrf <input type="hidden" name="berita_id" value="{{$berita->id}}">
                            <textarea name="komentar" id="komentar" rows="2" placeholder="Isi Komentar" class="form-control mb-1"></textarea>
                            <div class="float-right">
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                            </div>
                        </form>
                    </div>
                    </li>
                    @foreach ($berita->komentar()->get() as $komentar)
                        <li class="media mb-3">
                        <i class="fa fa-address-book-o fa-2x mr-2"></i>
                          <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="{{route('pengunjung.profil', ['username'=> $komentar->pengunjung->username])}}">{{$komentar->pengunjung->nama}}</a></h5>
                                {{$komentar->komentar}}
                          </div>
                        </li>
                    @endforeach
                </ul>

            </div>
            </div>
        </div>
    </div>

</main>

@endsection

@section('script')
<script src="{{asset('js/hapus.js')}}"></script>
@endsection
