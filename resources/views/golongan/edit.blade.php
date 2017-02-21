@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Data</div>
                <div class="panel-body">
                   
{!!Form ::model($golongan,['method'=>'PATCH','route'=>['golongan.update',$golongan->id]])!!}

<div class="form-group">
    {!!Form :: label('kode_golongan','Kode Golongan')!!}
    {!!Form :: text('kode_golongan',null,['class'=>'form-control','required'])!!}
                       
                       
</div>
<div class="form-group">
    {!!Form :: label('nama_golongan','Nama Golongan')!!}
    {!!Form :: text('nama_golongan',null,['class'=>'form-control','required'])!!}
</div>
<div class="form-group">
    {!!Form :: label('besaran_uang','Besaran Uang')!!}
    {!!Form :: text('besaran_uang',null,['class'=>'form-control','required'])!!}
</div>

<div class="form-group">
    {!!Form :: submit('Simpan',['class'=>'btn btn-success form-control'])!!}
</div>
{!!Form :: close()!!}
                    
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection