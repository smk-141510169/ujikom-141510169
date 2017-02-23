@extends('layouts.aa')
@section('content')
@if(Auth::user()->permision == 'admin')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <small></small>
                    </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i> Menu
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Tunjangan
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Data Tunjangan</div></h2>

                <div class="panel-body">
                     <div class="col-lg-12">
                        <h1></h1>
                       <div class="table-responsive">
                         <div class="form-group input-group">
                            <form action="tunjangan/?kode_tunjangan=kode_tunjangan">
                                <div class="form-group input-group">
                                <input type="text" class="form-control" name="kode_tunjangan">
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>
                                </div>
                                <h6>**Search diambil bedasarkan kode tunjangan</h6>
                            </form>
                          </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                        <a href="{{url('tunjangan/create')}}" class="btn btn-primary"><i>Tambah Data</a></i>

                         <hr>   
                            <table class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                    <th><center>No</center></th>
                                    <th><center>Kode Tunjangan</center></th>
                                    <th><center>Nama Jabatan</center></th>
                                    <th><center>Nama Golongan</center></th>
                                    <th><center>Status</center></th>
                                    <th><center>Jumlah Anak</center></th>
                                    <th><center>Besaran Uang</center></th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach($tunjangan as $data)
                                <tr>
                                    <td><center>{{$no++}}</center></td>
                                    <td><center>{{$data->kode_tunjangan}}</center></td>
                                    <td><center>{{$data->jabatan->nama_jabatan}}</center></td>
                                    <td><center>{{$data->golongan->nama_golongan}}</center></td>
                                    <td><center>{{$data->status}}</center></td>
                                    <td><center>{{$data->jumlah_anak}}</center></td>
                                    <td><center>Rp.{{$data->besaran_tunjangan}}</center></td>
                                    <td><center>
                                    <a href="{{route('tunjangan.edit', $data->id)}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"> Edit</i></a>
                                

                                    <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"> Hapus</i></a>
                                    
                                    @include('hapus.delete', [
                                    'url' => route('tunjangan.destroy', $data->id),
                                    'model' => $data
                                  ])
                                </center></td>
                                </tr>
                          
                                </tbody>
                                

                                @endforeach
                            </table>
                          {{$tunjangan->links()}}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
    <div class="container">
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Peringatan - Haram Kembali
                            <small></small>
                        </h1>
                        
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    Anda Tidak Berhak Mengakses Halaman Kategori Lembur
                </div>
            </div>
        </div>
    </div>
</div>

@endif

@endsection
