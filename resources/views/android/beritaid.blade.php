@extends('android.android-template')
@section('css')

@endsection
@section('content')

<div class="row justify-content-md-center">
        <div class="col-md-9 col-sm-12">
            <div style="padding: 30px 10px 50px 10px">
                <div class="text-center" style="padding-bottom: 20px">
                    <h3>{{$berita->judul}}</h3>
                     Diterbitkan : {{hari_tanggal_waktu($berita->created_at, true)}} -  oleh : {{$berita->pengunjung->nama}}
                </div>
                <img src="{{asset($berita->lampiran)}}" alt="" width="100%">
                <hr>
            </div>
            {!!$berita->berita!!}
            <hr>
                <small> Terakhir diupdate {{hari_tanggal_waktu($berita->updated_at, true)}}</small>
            <hr>
            <ul class="list-unstyled">
                @auth
                <li class="media">
                <div class="media-body">
                    <form action="{{route('pengunjung.komentar.store')}}" method="post">@csrf <input type="hidden" name="berita_id" value="{{$berita->id}}">
                        <textarea name="komentar" id="komentar" rows="2" placeholder="Isi Komentar" class="form-control mb-1"></textarea>
                        <div class="float-right"> <a href="#" class="btn btn-link btn-sm" style="text-decoration: none; color: black"> {{Auth::user()->nama}}</a> - <a class="btn btn-link btn-sm" href="{{ route('pengunjung.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            
                        <button type="submit" class="btn btn-primary btn-sm" style="min-width: 150px">Kirim</button>
                        </div>
                    </form>
                </div>
                </li>
                <li class="media"><hr></li>
                    <form id="logout-form" action="{{ route('pengunjung.logout') }}" method="POST">
                        <input type="hidden" name="redirect" value="{{url()->current()}}">
                        {{ csrf_field() }}
                    </form>
                @else
                <li class="media">
                    <a href="{{route('pengunjung.login').'?redirect='.url()->current()}}" class="btn btn-primary btn-block mb-4">Login</a>
                </li>
                @endauth
                @foreach ($berita->komentar()->get() as $komentar)
                    <li class="media mb-3">
                    <i class="fa fa-address-book-o fa-2x mr-2"></i>
                      <div class="media-body">
                            <h5 class="mt-0 mb-1">{{$komentar->pengunjung->nama}}</h5>
                            {{$komentar->komentar}}
                      </div>
                    </li>
                @endforeach
            </ul>
            
        </div>
    
</div>

@endsection
@section('script')

<script>
    $(document).ready(function(){
        $('iframe').each(function () {
            var src = $(this).attr('src');
            var frame = '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="'+src+'" allowfullscreen></iframe></div>'
            $(this).before(frame);
            $(this).remove();
        });
        $('img').each(function () {
            var src = $(this).attr('src');
            var src = src.replace('http://localhost/gunung/', '{{env("APP_URL")}}');

            $(this).removeAttr("style");
            $(this).attr('width', '100%')
            $(this).attr('src', src)
        });
    });

</script>


@endsection
