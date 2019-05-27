<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

  </head>
  <body>
    <div class="container-fluid">

            <br>
            <div class="row justify-content-md-center">
            <div class="col-md-9 col-sm-12">
                        <div class="text-center" style="padding-bottom: 20px">
                            <h3>{{$gunung->nama}}</h3>
                            <p>Status Gunung {{$gunung->status}} <br>{{$gunung->alamat}}</p>

                            <div id="carouselExampleControls" style="height: 200px; overflow: hidden" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="100">
                                            <img src="{{asset($gunung->thumbnail)}}" alt="...">
                                        </div>
                                        @foreach ($gunung->galeri()->get() as $i => $foto)
                                            <div class="carousel-item"  data-interval="100">
                                                <img src="{{asset($foto->foto)}}" class="d-block w-100" alt="...">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </div>
                        </div>
            </div>
            <div class="col-md-9 col-sm-12"  style="min-height: 400px">
                {!!$gunung->deskripsi!!}
            </div>
            <div class="col-md-9 col-sm-12">
                    <div style="position: relative; bottom: 0px; padding-bottom: 25px">
                <hr>
                    <small> Terakhir diupdate {{hari_tanggal_waktu($gunung->updated_at, true)}}</small>
                </div>
            </div>
            @if ($gunung->berita()->count()!=0)
                <div class="col-md-9 col-sm-12" style="margin-top: 100px">
                    <h4>Berita Terkait Gunung</h4><hr>
                    @foreach ($gunung->berita()->orderBy('id', 'DESC')->get() as $berita)
                    <div class="media">
                    <img src="{{asset($berita->lampiran)}}" class="leading mr-3" alt="...">
                    <div class="media-body">
                    <a href="{{url('berita/'.$berita->id)}}"><h5 class="mt-0" style="margin-bottom: 0px">{{$berita->judul}}</h5></a>
                        <small style="font-size: 60%">{{hari_tanggal_waktu($berita->created_at, true)}}</small> <br>
                        <small>{{$berita->text_pembuka}}</small>
                    </div>
                    </div>
                    <br>
                    @endforeach
                </div>
            @endif

        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>
            $(document).ready(function(){
                $('.carousel').carousel()
                console.log('as');
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
                $('.leading').each(function () {
                    var src = $(this).attr('src');
                    var src = src.replace('http://localhost/gunung/', '{{env("APP_URL")}}');

                    $(this).removeAttr("style");
                    $(this).attr('width', '90px')
                    $(this).attr('src', src)
                });
            });

    </script>
  </body>
</html>
