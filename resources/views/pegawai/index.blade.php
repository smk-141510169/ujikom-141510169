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
                                <i class="fa fa-edit"></i> Pegawai
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Data Pegawai</div></h2>
                <form enctype="multipart/form-data">
                <div class="panel-body">
                     <div class="col-lg-12">
                        <h1></h1>
                                <div class="table-responsive">
                       	 
                        <div class="form-group input-group">
                            <form action="pegawai/?nip=nip">
                                <div class="form-group input-group">
                                <input type="text" class="form-control" name="nip">
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>
                                </div>
                                <h6>**Search diambil bedasarkan nip pegawai</h6>
                            </form>
                        </div>
                        </div>
                        <hr>
                        <a href="{{url('pegawai/create')}}" class="btn btn-primary"><i>Tambah Data</a></i>
                         <hr>   
                        
                           <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>NIP</center></th>
                                        <th><center>Nama Pegawai</center></th>
                                        <th><center>Jabatan</center></th>
                                        <th><center>Golongan</center></th>
                                        <th><center>Foto Pegawai</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                                @endphp
                                @foreach($pegawai as $data)
                                <tbody>
                                    <tr>
                                        <td><center>{{$no++}}</center></td>
                                        
                                        <td><center>{{$data->nip}}</center></td>
                                        <td><center>{{$data->user->name}}</center></td>
                                        <td><center>{{$data->jabatan->nama_jabatan}}</center></td>
                                        <td><center>{{$data->golongan->nama_golongan}}</center></td>
                                        <td><center><img src="{{asset('image/'.$data->photo)}}" height="50" width="50"></center></td>
                                        <td><center>
                                        <a title="Mengedit Data " href="{{route('pegawai.edit',$data->id)}}" class="btn btn-success"><i class="fa fa-edit"> Edit</a></i>
                                        
                                        <!--<a data-toggle="modal" href="#delete{{$data->id}}" class="btn btn-danger" title="Menghapus Data" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"> Hapus</a></i>

                                        @include('hapus.delete',['url'=>route('pegawai.destroy',$data->id),'model'=>$data])-->

                                        </center>
                                        </td>
                                    </tr>
                                   </tbody>
                                @endforeach
                            </table>
                            <h4>**Untuk mengghapus data penggawai lewat tabel user</h4>
                             {{$pegawai->links()}}
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
            </form>
        </div>
    </div>
</div>
@else
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
                                <i class="fa fa-edit"></i> Pegawai
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Data Pegawai</div></h2>
                <form enctype="multipart/form-data">
                <div class="panel-body">
                     <div class="col-lg-12">
                        <h1></h1>
                        <div class="table-responsive">
                        
                        <!--<div class="form-group input-group">
                            <form action="siswa/?nama_siswa=nama_siswa">
                                <input type="text" name="nama_siswa" placeholder="search">
                                <input type="submit" class="btn btn-success" value="search">
                                <a href="{{'/siswa'}}" class="btn btn-danger"><i> Reset</a></i>
                            </form>
                        </div>-->
                     
                         <hr>   
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>NIP</center></th>
                                        <th><center>Nama Pegawai</center></th>
                                        <th><center>Jabatan</center></th>
                                        <th><center>Golongan</center></th>
                                        <th><center>Foto Pegawai</center></th>
                                        
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                                @endphp
                                @foreach($pegawai as $data)
                                <tbody>
                                    <tr>
                                        <td><center>{{$no++}}</center></td>
                                        
                                        <td><center>{{$data->nip}}</center></td>
                                        <td><center>{{$data->user->name}}</center></td>
                                        <td><center>{{$data->jabatan->nama_jabatan}}</center></td>
                                        <td><center>{{$data->golongan->nama_golongan}}</center></td>
                                        <td><center><img src="{{asset('image/'.$data->photo)}}" height="50" width="50"></center></td>
                                        
                                    </tr>
                                   </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
            </form>
        </div>
    </div>
</div>
@endif
@endsection