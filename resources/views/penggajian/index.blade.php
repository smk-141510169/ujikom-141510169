@extends('layouts.aa')
@section('content')
<?php $page = "Tabel Penggajian" ?>
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
                                <i class="fa fa-edit"></i> Penggajian
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="panel-body">
					<div class="table-responsive">
					<hr>
                        <div class="table-responsive">
                        <a href="{{url('penggajian/create')}}" class="btn btn-primary"><i>Tambah Data</a></i>

                         <hr>   
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th><center>No</center></th>
									<th><center>NIP Pegawai</center></th>
									<th><center>Nama Pegawai</center></th>
									<th><center>Aksi</center></th>
								</tr>
							</thead>
							<tbody>
							@if(isset($tunjangan_pegawai))
							
							@else
							@php
							$no=1;
							@endphp
							@foreach($penggajian as $data)
								<tr>
									<td><center>{{$no++}}</center></td>
									<td><center>{{$pegawai->tunjangan_pegawai->nip}}</center></td>
									<td><center>{{$pegawai->tunjangan_pegawai->User->name}}</center></td>
									<td><center>
									<a href="{{url('penggajian',$data->id)}}" class="btn btn-primary" title="Melihat detail gaji"><i class="fa fa-eye"> Detail</i></a>
                               
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Menghapus data" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"> Hapus</i></a>
                                  @include('hapus.delete', [
                                    'url' => route('penggajian.destroy', $data->id),
                                    'model' => $data
                                  ])
                                </center></td>

								</tr>
							@endforeach
							
							@endif
							</tbody>
						</table>
						<h6>**Data penggajian dah masuk ke database tapi belum bisa ketampil di index</h6>
						<h6>**Data penggajian bisa dilihat lewat show c/ http://localhost:8000/penggajian/id</h6>
						<h6>id diambil sesuai id tabel penggajians</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection