@extends('adminlte::page')
@section('title', 'Halaman Pengaduan')
@section('content_header')
@stop

@section('content')
<div class="container mt-5">
    <div class="row mt-5 justify-content-center">
      <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif
        <br>
        <br>
        <div class="card">
          <div class="card-header text-center">
              <strong>Tulis Pengaduan Anda</strong>
          </div>
          <div class="card-body" width="100%">
              <form action="{{route('pengaduan.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="jdl_pengaduan">Judul Pengaduan</label>
                  <input type="text" class="form-control @error('jdl_pengaduan') is-invalid @enderror" name="jdl_pengaduan" placeholder="Judul Pengaduan Anda" value="{{old('jdl_pengaduan')}}">
                  @error('jdl_pengaduan')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="jdl_pengaduan">tanggal Pengaduan</label>
                  <input type="date" class="form-control @error('tgl_pengaduan') is-invalid @enderror" name="tgl_pengaduan" placeholder="" value="{{old('tgl_pengaduan')}}">
                  @error('tgl_pengaduan')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Isi Laporan Anda</label>
                  <textarea name="isi_laporan" class="form-control @error('isi_laporan') is-invalid @enderror" id="" cols="30" rows="10"></textarea>
                  @error('isi_laporan')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
                </div>
                <div class="form-group">
                  <label for="">Foto / Berkas Pendukung</label>
                  <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Berkas Pendukung/Foto Jika ada">
                </div>
                @error('foto')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
                <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection