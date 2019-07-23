@extends('pengunjung.pengunjung-template')
@section('css')

@endsection
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>{{env("APP_NAME")}}</h1>
            <p>Selamat datang di dashboard Admin</p>
        </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="tile mb-1">
            <div class="page-header">
              <h6 class="mb-3 line-head" id="containers">Gunung Terkhir diupdate</h6>
            </div>
            <div class="bs-component">
                @foreach (App\Models\Gunung::limit(5)->orderBy('updated_at','desc')->get() as $gunung)
                  
                <div class="media">
                  <div class="media-body">
                    <a href="{{route('pengunjung.gunung.show', ['id'=>$gunung->id])}}"><h5 class="mt-0">{{$gunung->nama}}</h5></a>
                    {{$gunung->alamat}}
                  </div>
                </div><br>
              @endforeach
            </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="tile mb-1">
          <div class="page-header">
              <h6 class="mb-3 line-head" id="containers">Berita Terkhir diupdate</h6>
            </div>
            <div class="bs-component">
              @foreach (App\Models\Berita::limit(5)->orderBy('updated_at','desc')->get() as $berita)
                  
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
    </div>
           
    
</main>

@endsection

@section('script')

@endsection
