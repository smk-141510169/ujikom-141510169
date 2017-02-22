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
                                <i class="fa fa-edit"></i> Lembur Pegawai
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Data Lembur Pegawai</div></h2>

                <div class="panel-body">
                     <div class="col-lg-12">
                        <h1></h1>
                        <!--<div class="form-group input-group">
                            <form action="matadiklat/?nama_mata_diklat=nama_mata_diklat">
                                <input type="text" name="nama_mata_diklat" placeholder="search">
                                <input type="submit" class="btn btn-success" value="search">
                                <a href="{{'/matadiklat'}}" class="btn btn-danger"><i> Reset</a></i>
                            </form>
                        </div>-->
                        <hr>
                        <div class="table-responsive">
                        <a href="{{url('lembur_pegawai/create')}}" class="btn btn-primary"><i>Tambah Data</a></i>

                         <hr>   
                            <table class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>Kode Kategori Lembur</center></th>
                                        <th><center>NIP Pegawai</center></th>
                                        <th><center>Nama Pegawai</center></th>
                                        <th><center>Jumlah Jam</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                                @endphp
                                @foreach($lembur_pegawai as $data)
                                <tbody>
                                    <tr>
                                        <td><center>{{$no++}}</center></td>
                                        <td><center>{{$data->kategori_lembur->kode_lembur}}</center></td>
                                        <td><center>{{$data->pegawai->nip}}</center></td>
                                        <td><center>{{$data->pegawai->User->name}}</center></td>
                                        <td><center>{{$data->jumlah_jam}}</center></td>
                                        <td><center>

                                        <a title="Mengubah Data" href="{{route('lembur_pegawai.edit',$data->id)}}" class="btn btn-success"><i class="fa fa-edit"> Edit</a></i>

                                        <a data-toggle="modal" href="#delete{{$data->id}}" class="btn btn-danger" title="Menghapus Data" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"> Hapus</a></i>

                                        @include('hapus.delete',['url'=>route('lembur_pegawai.destroy',$data->id),'model'=>$data])
                                        </center>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                

                                @endforeach
                            </table>
                          {{$lembur_pegawai->links()}}
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
                    Anda Tidak Berhak Mengakses Halaman Lembur 
                    Pegawai
                </div>
            </div>
        </div>
    </div>
</div>

@endif

@endsection
