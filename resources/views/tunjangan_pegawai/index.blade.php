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
                                <i class="fa fa-edit"></i> Tunjangan Pegawai
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Data Tunjangan Pegawai</div></h2>

                <div class="panel-body">
                     <div class="col-lg-12">
                        <h1></h1>
                        <div class="table-responsive">
                         
                        <div class="form-group input-group">
                            <form action="tunjangan_pegawai/?created_at=created_at">
                                <div class="form-group input-group">
                                <input type="text" class="form-control" name="created_at">
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>
                                </div>
                                <h6>**Search diambil bedasarkan tanggal buat</h6>
                            </form>
                        </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                        <a href="{{url('tunjangan_pegawai/create')}}" class="btn btn-primary"><i>Tambah Data</a></i>

                         <hr>   
                            <table class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>Kode Tunjangan</center></th>
                                        <th><center>NIP Pegawai</center></th>
                                        <th><center>Nama Pegawai</center></th>
                                        <th><center>Besaran Uang</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                                @endphp
                                @foreach($tunjangan_pegawai as $data)
                                <tbody>
                                    <tr>
                                        <td><center>{{$no++}}</center></td>
                                        <td><center>{{$data->tunjangan->kode_tunjangan}}</center></td>
                                        <td><center>{{$data->pegawai->nip}}</center></td>
                                        <td><center>{{$user->where('id',$data->pegawai->user_id)->first()->name}}</center></td>
                                        <td><center>Rp.{{$data->tunjangan->besaran_tunjangan}}</center></td>
                                        <td><center>

                                        <a title="Mengubah Data" href="{{route('tunjangan_pegawai.edit',$data->id)}}" class="btn btn-success"><i class="fa fa-edit"> Edit</a></i>

                                        <a data-toggle="modal" href="#delete{{$data->id}}" class="btn btn-danger" title="Menghapus Data" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"> Hapus</a></i>

                                        @include('hapus.delete',['url'=>route('tunjangan_pegawai.destroy',$data->id),'model'=>$data])
                                        </center>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                

                                @endforeach
                            </table>
                          {{$tunjangan_pegawai->links()}}
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
                    Anda Tidak Berhak Mengakses Halaman Tunjangan Pegawai
                </div>
            </div>
        </div>
    </div>
</div>

@endif

@endsection
