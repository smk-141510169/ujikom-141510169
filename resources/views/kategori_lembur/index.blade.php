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
                                <i class="fa fa-edit"></i> Kategori Lembur
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Data Kategori Lembur</div></h2>

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
                        <a href="{{url('kategori_lembur/create')}}" class="btn btn-primary"><i>Tambah Data</a></i>

                         <hr>   
                            <table class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>Kode Lembur</center></th>
                                        <th><center>Nama Jabatan</center></th>
                                        <th><center>Nama Golongan</center></th>
                                        <th><center>Besaran Uang</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                                @endphp
                                @foreach($kategori_lembur as $data)
                                <tbody>
                                    <tr>
                                        <td><center>{{$no++}}</center></td>
                                        <td><center>{{$data->kode_lembur}}</center></td>
                                        <td><center>{{$data->jabatan->nama_jabatan}}</center></td>
                                        <td><center>{{$data->golongan->nama_golongan}}</center></td>
                                        <td><center>Rp.{{$data->besaran_uang}}</center></td>
                                        <td><center>

                                        <a title="Mengubah Data" href="{{route('kategori_lembur.edit',$data->id)}}" class="btn btn-success"><i class="fa fa-edit"> Edit</a></i>

                                        <a data-toggle="modal" href="#delete{{$data->id}}" class="btn btn-danger" title="Menghapus Data" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"> Hapus</a></i>

                                        @include('hapus.delete',['url'=>route('kategori_lembur.destroy',$data->id),'model'=>$data])
                                        </center>
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
