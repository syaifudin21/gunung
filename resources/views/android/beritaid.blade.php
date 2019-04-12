<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    <div class="container-fluid">

<div class="row justify-content-md-center">
    <div class="col-md-9 col-sm-12">
        <div class="tile" style="padding: 30px 10px 50px 10px">
            <div class="text-center" style="padding-bottom: 20px">
                <h3>{{$berita->judul}}</h3>
                <small> Diterbitkan : {{hari_tanggal_waktu($berita->created_at, true)}}</small>
            </div>
            <img src="{{asset($berita->lampiran)}}" alt="" width="100%" class="rounded">
            <hr>
                {!!$berita->berita!!}
        </div>
        <div style="position: absolute; bottom: 0px; padding: 10px">
            <hr>
               <small> Terakhir diupdate {{hari_tanggal_waktu($berita->updated_at, true)}}</small>
        </div>
    </div>

</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}" ></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


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
                    var src = src.replace('http://localhost/gunung/', 'http://192.168.1.199/gunung/');

                    $(this).removeAttr("style");
                    $(this).attr('width', '100%')
                    $(this).attr('src', src)
                });
            });

    </script>
   </body>
</html>
