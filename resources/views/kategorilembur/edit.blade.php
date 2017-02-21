@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Register Kategori Lembur</div>
                <div class="panel-body">
                    
                         {!!Form ::model($kategorilembur,['method'=>'PATCH','route'=>['kategorilembur.update',$kategorilembur->id]])!!}              

                        <div class="form-group">
                            <div class="col-md-6">
                            {!!Form :: label('kode_lembur','Kode Lembur')!!}
                            
                                {!!Form :: text('kode_lembur',null,['class'=>'form-control','required'])!!}
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Kode Jabatan</label>

                            <div class="col-md-6">
                                <select class="form-control" name="jabatan_id">
                                    <option >PILIH</option>
                                    @foreach($jabatan as $data)
                                    <option value="{!!$data->id!!}">{!!$data->nama_jabatan!!}</option>
                                @endforeach
                            </select>

                                @if ($errors->has('jabatan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                            <label for="golongan_id" class="col-md-4 control-label">Kode Golongan</label>

                            <div class="col-md-6">
                                <select class="form-control" name="golongan_id">
                                    <option >PILIH</option>
                                    @foreach($golongan as $data)
                                    <option value="{!!$data->id!!}">{!!$data->nama_golongan!!}</option>
                            @endforeach
                            </select>

                                @if ($errors->has('golongan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('golongan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <div class="col-md-6">
                            {!!Form :: label('besaran_uang','Besaran Uang')!!}
                              {!!Form :: text('besaran_uang',null,['class'=>'form-control','required'])!!}
                            </div>
                        </div>    
    
                  

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-0">  
                                <button type="submit" class="btn btn-primary">
                                    
                                         Simpan Data
                                    
                                </button>
                            </div>
                        </div>
                        {!!Form :: close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
        


                       
                    
    
@endsection
