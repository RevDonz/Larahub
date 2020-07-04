@extends('master')

@section('title', 'Detail Pertanyaan')
@section('content')
	
	<div class="card card-widget">
      <div class="card-header">
        <div class="user-block">
          <img class="img-circle" src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
          <span class="username"><a href="#">Reva Doni Aprilio</a></span>
          <span class="description">Dibuat pada : {{ $pertanyaan->created_at }} | Diubah pada : {{ $pertanyaan->updated_at }}</span>
        </div>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" title="Edit">
            <a href="/pertanyaan/{{ $pertanyaan->id_pertanyaan }}/edit"><i class="fas fa-edit"></i></a>
          </button>
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <!-- post text -->
        <p class="h3">
			{{ $pertanyaan->judul }}
      	</p>

      	<p>
			{{ $pertanyaan->isi }}
      	</p>

        <span class="float-right text-muted">45 likes - 2 comments</span>
      </div>
      <!-- /.card-body -->
      <div class="card-footer card-comments">
		
		@foreach ($jawaban as $jawab)
        <div class="card-comment">
          <!-- User image -->
        	<img class="img-circle img-sm" src="{{asset('/adminlte/dist/img/user3-128x128.jpg')}}" alt="User Image">
			
          	<div class="comment-text">
            	<span class="username">
              		Maria Gonzales
              		<span class="text-muted float-right">{{ $jawab->created_at }}</span>
            	</span>
            	{{ $jawab->isi_jawaban }}
          	</div>
        </div>
        @endforeach
      </div>

      <!-- /.card-footer -->
      <div class="card-footer">
        <form action="/jawaban/" method="post">
        	@csrf
        	<input type="hidden" name="pertanyaan_id" id="pertanyaan_id" value="{{ $pertanyaan->id_pertanyaan }}">
          <img class="img-fluid img-circle img-sm" src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="Alt Text">
          <!-- .img-push is used to add margin to elements next to floating images -->
          <div class="img-push row">
            <div class="input-group mb-3">
              <!-- /btn-group -->
              <input type="text" class="form-control" name="isi_jawaban" id="isi_jawaban" placeholder="Masukkan jawaban anda..">
              <div class="input-group-prepend">
                <button type="submit" class="btn btn-danger">Kirim</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-footer -->
    </div>

@endsection