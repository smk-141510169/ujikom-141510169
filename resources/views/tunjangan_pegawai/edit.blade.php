@extends('layouts.app')
@section('content')
<title>Golongan</title>
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading">Tambah Tunjangan</div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{route('tunjangan_pegawai.update' ,$tunjangan_pegawai->id)}}" method="POST">
                    <div class="form-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
                            <label for="pegawai_id" class="col-md-4 control-label"> Pegawai </label>
                                <div class="col-md-6">
                                    <select name="pegawai_id" class="form-control">
                                @foreach ($pegawai as $data)
                                <option value="{{$data->id}}" <?php if ($tunjangan_pegawai->pegawai_id==$data->id) {echo "selected";} ?>>{{$data->nip}} - {{$data->user->name}}</option>
                                @endforeach
                            </select>
                                    @if ($errors->has('pegawai_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pegawai_id') }}</strong>
                                    </span>
                                @endif
                                <!--@if (isset($missing_count))
                            <div style="width: 100%;color: red;text-align: center;">
                                Pegawai ini tidak memiliki Tunjangan, silahkan untuk membuat kategori <a href="{{url('tunjangan/create')}}">disini</a>
                            </div>
                            @endif-->
                                </div>
                    </div>

                     <div class="form-group{{ $errors->has('kode_tunjangan_id') ? ' has-error' : '' }}">
                            <label for="kode_tunjangan_id" class="col-md-4 control-label"> Kode Tunjangan</label>
                                <div class="col-md-6">
                                    <select type="text" name="kode_tunjangan_id" class="form-control">
                                        <option value="">Pilih</option>
                                        @foreach($tunjangan as $data)
                                        <option value="{{$data->id}}" <?php if ($tunjangan_pegawai->kode_tunjangan_id==$data->id) {echo "selected";} ?>>{{$data->kode_tunjangan}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('kode_tunjangan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_tunjangan_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4" >
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection