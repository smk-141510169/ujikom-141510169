<!--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data</div>
                <div class="panel-body">
                   <div class="form-group">

{!!Form ::model($pegawai,['method'=>'PATCH','route'=>['pegawai.update',$pegawai->id]])!!}

    {!!Form :: label('kode_mata_diklat','Kode Mata Diklat')!!}
    <select class="form-control" name="id_matadiklat">
        @foreach($matadiklat as $data)
        <option value="{!!$data->id!!}">{!!$data->nama_mata_diklat!!}</option>
        @endforeach
    </select>
    
</div>

<div class="form-group">
    {!!Form :: label('kode_kk','Kode Kompetensi Keahlian')!!}
    {!!Form :: number('kode_kk',null,['class'=>'form-control','required'])!!}
</div>
<div class="form-group">
    {!!Form :: label('nama_kompetensikeahlian','Nama Mata Diklat')!!}
    {!!Form :: text('nama_kompetensikeahlian',null,['class'=>'form-control','required'])!!}
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

-->