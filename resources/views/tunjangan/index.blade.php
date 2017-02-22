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
                        <form action="kategori_lembur/?kode_lembur=kode_lembur">
                                <div class="form-group input-group">
                                <input type="text" class="form-control" name="kode_lembur"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                             
                                <h6>**Search diambil bedasarkan kode lembur</h6>
                            </form>
                        <hr>
                        <div class="table-responsive">
                        <a href="{{url('tunjangan/create')}}" class="btn btn-primary"><i>Tambah Data</a></i>

                         <hr>   
                            <table class="table table-bordered table-hover">

                                <thead>
                                    <tr class="success">
                                    <th>Kode Tunjangan</th>
                                    <th>Nama Jabatan</th>
                                    <th>Nama Golongan</th>
                                    <th>Status</th>
                                    <th>Jumlah Anak</th>
                                    <th>Besaran Uang</th>
                                    <th colspan="3"><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tunjangan as $data)
                                <tr>
                                    <td>{{$data->kode_tunjangan}}</td>
                                    <td>{{$data->jabatan->nama_jabatan}}</td>
                                    <td>{{$data->golongan->nama_golongan}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>{{$data->jumlah_anak}}</td>
                                    <td>{{$data->besaran_uang}}</td>
                                    <td align="right">
                                    <a href="{{route('tunjangan.edit', $data->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>

                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('tunjangan.destroy', $data->id),
                                    'model' => $data
                                  ])
                                </td>
                                </tr>
                          
                                </tbody>
                                

                                @endforeach
                            </table>
                          {{$kategori_lembur->links()}}
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
