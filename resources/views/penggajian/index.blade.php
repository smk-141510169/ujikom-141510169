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
							@if(isset($tunjangan_penggajian))
							
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
                                	<td></td>
								</tr>	
							
							@else
							@php
							$no=1;
							@endphp
							@foreach($penggajian as $data)
								<tr>
									<td><center>{{$no++}}</center></td>
									<td><center>{{$pegawai->nip}}</center></td>
									<td><center>{{$users->name}}</center></td>
									<td><center>
									<a href="{{url('penggajian',$data->id)}}" class="btn btn-default" title="Details"><i class="fa fa-eye"></i></a>
                               
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection