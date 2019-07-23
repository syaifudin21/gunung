@extends('pengunjung.pengunjung-template')
@section('css')

@endsection
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>Gunung Indonesia</h1>
            <p>Informasi deskripsi gunung yang ada di Indonesia</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
			<div class="tile">
			  <div class="tile-body">
				<form class="form-horizontal" id="submit-form" enctype="multipart/form-data" method="post" action="{{route('pengunjung.berita.update')}}">
                {{ csrf_field() }} @method('put') <input type="hidden" name="id" value="{{$berita->id}}">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label">Judul Berita</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="judul" id="staticEmail" placeholder="Judul Berita" value="{{$berita->judul}}">
                                    @if ($errors->has('judul'))
                                        <small class="form-text text-muted">{{ $errors->first('judul') }}</small>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="text_pembuka" class="col-sm-2 col-form-label">Text Pembuka</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="text_pembuka" id="staticEmail" placeholder="Text Pembuka">{{$berita->text_pembuka}}</textarea>
                                    @if ($errors->has('text_pembuka'))
                                        <small class="form-text text-muted">{{ $errors->first('text_pembuka') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lampiran" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" onchange="fotoURl(this)" name="lampiran" id="staticEmail" >
                                    @if ($errors->has('lampiran'))
                                        <small class="form-text text-muted">{{ $errors->first('lampiran') }}</small>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            @if (!empty($berita->lampiran))
                                <img src="{{asset($berita->lampiran)}}" width="100%" class="rounded" alt="thumbnail" id="lampiran">
                            @else
                                <img src="{{asset('images/thumbnail.svg')}}" width="100%" class="rounded" alt="thumbnail" id="lampiran">
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                        <textarea id="summernote" name="berita">{{$berita->berita}}</textarea>
                    </div>
                    </div>

                    <input type="hidden" name="redirect" value="{{url()->previous()}}">

				</form>

			  </div>
			  <div class="tile-footer">
				<div class="row">
				  <div class="col-md-8 col-md-offset-3">
					<button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('submit-form').submit();"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
					<a class="btn btn-secondary" href="{{url()->previous()}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
				</div>
				</div>
			  </div>
			</div>
		  </div>

    </div>
</main>

@endsection

@section('script')
<!-- include summernote css/js -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>

<script>
$(document).ready(function() {
$("#summernote").summernote({
    placeholder: 'Deskripsi Gunung',
        height: 300,
            callbacks: {
        onImageUpload : function(files, editor, welEditable) {

                for(var i = files.length - 1; i >= 0; i--) {
                        sendFile(files[i], this);
            }
        }
    }
    });
});
function sendFile(file, el) {
var form_data = new FormData();
form_data.append('file', file);
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$.ajax({
    data: form_data,
    type: "POST",
    url: '{{route('upload.gambar')}}',
    cache: false,
    contentType: false,
    processData: false,
    success: function(response) {
        console.log(response.image);
        $(el).summernote('editor.insertImage', response.image);
    }
});
}

function fotoURl(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#lampiran').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
