@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Halaman User</h1>
@stop

@section('content')
<div class="card">
   <div class="card-body">
       @if (session('status'))
           <x-adminlte-alert theme="success" title="Sukses">
               {{session('status')}}
           </x-adminlte-alert>
       @endif
       @if ($errors->any())
           <x-adminlte-alert theme="success" title="Sukses">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </x-adminlte-alert>
       @endif
       <br/> <br/>
       <div class="table-responsive">
           <table id="tabel_pengaduan" class="table table-striped table-hover table-condensed table-bordered">
               <thead>
               <tr style="background-color: darkgrey">
                       <th>No</th>
                       <th>Nama</th>
                       <th>NIK</th>
                       <th>Nomor Telepon</th>
                       <th>tanggal pengaduan</th>
                       <th>isi laporan</th>
                       <th>foto</th>
                       <th>status</th>
                       <th class="text-center" width="70">Aksi</th>
                   </tr>
               </thead>
               <tbody>
               @foreach($pengaduan as $pengaduan)
                   <tr>
                       <td>{{$loop->iteration}}</td>
                       <td>{{$pengaduan->user->name}}</td>
                       <td>{{$pengaduan->user->nik}}</td>
                       <td>{{$pengaduan->user->tlp}}</td>
                       <td>{{$pengaduan->tgl_pengaduan}}</td>
                       <td>{{$pengaduan->isi_laporan}}</td>
                       <td>@if($pengaduan->foto)
                        @foreach($pengaduan->foto as $foto)
                        <img src="{{asset('foto/'.$foto->foto)}}" width="100px" height="100px" />
                        @endforeach
                        @endif
                       </td>
                       <td>{{$pengaduan->status}}</td>
                           <td>
                            <a href="" class="btn btn-sm btn-primary"
                                title="Edit"><i class=""></i>Tanggapan</a>
                                   <x-adminlte-button class="btn btn-sn btn-danger" label="Delete" data-toggle="modal" data-target="#hapuspengaduan{{$loop->iteration}}" icon="far fa-trash-alt" class="bg-danger"> Hapus </x-adminlte-button>
                                       {{-- Custom --}}
                                   <x-adminlte-modal id="hapuspengaduan{{$loop->iteration}}" title="hapuspengaduan" size="md" theme="orange"
                                   icon="fas fa-bell" v-centered static-backdrop scrollable>
                                   <div style="height:80px;">
                                       <form action="{{route('pengaduan.delete',$pengaduan->id)}}" method="POST">
                                           @csrf
                                           @method('DELETE')
                                             Apakah anda yakin akan menghapus pengaduan ini?</div>
                                   <x-slot name="footerSlot">
                                       <x-adminlte-button type="submit" class="mr-auto" theme="primary" label="Hapus"/>
                                       <x-adminlte-button theme="danger" label="Batal" data-dismiss="modal"/>
                                       </form>
                                   </x-slot>
                                   </x-adminlte-modal>
                           </td>    
                         </tr>
                       @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>


@stop
@section('plugins.Datatables', true)
@section('js')
   <script> $('#tabel_user').DataTable();</script>
@stop