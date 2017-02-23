@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Register Lembur Pegawai</div>
                <div class="panel-body">
                     <form class="form-horizontal" action="{{route('lembur_pegawai.update',$lembur_pegawai->id)}}" method="POST">    
                     <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                     <div class="form-group{{ $errors->has('kode_lembur_id') ? ' has-error' : '' }}">
                            <label for="kode_lembur_id" class="col-md-4 control-label">Kode Lembur</label>
                                <div class="col-md-6">
                                    <input type="text" name="kode_lembur_id" value="{{$lembur_pegawai->kategori_lembur->kode_lembur}}" class="form-control" disabled>
                                    @if ($errors->has('kode_lembur_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_lembur_id') }}</strong>
                                    </span>
                                @endif
                                </div>
                    </div>
                    <div class="form-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
                            <label for="pegawai_id" class="col-md-4 control-label">NIP & Nama Pegawai</label>
                                <div class="col-md-6">
                                    <input type="text" name="pegawai_id" value="{{$lembur_pegawai->pegawai->nip}} - {{$user->where('id',$lembur_pegawai->pegawai->user_id)->first()->name}}" class="form-control" disabled>
                            

                                    @if ($errors->has('pegawai_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pegawai_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                    </div>

                    
                    <div class="form-group{{ $errors->has('jumlah_jam') ? ' has-error' : '' }}">
                            <label for="jumlah_jam" class="col-md-4 control-label">Jumlah Jam </label>
                                <div class="col-md-6">
                                    <input type="text" name="jumlah_jam" value="{{ $lembur_pegawai->jumlah_jam}}" class="form-control">
                                    @if ($errors->has('jumlah_jam'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jumlah_jam') }}</strong>
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
        </div>
    </div>
        


                       
                    
    
@endsection
