@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Data Pegawai</div>
                <div class="panel-body">
                    
                         {!!Form ::model($pegawai,['method'=>'PATCH','route'=>['pegawai.update',$pegawai->id],'files'=>true])!!}
                       
       
                   

                        <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-4 control-label">NIP</label>

                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" value="{{$pegawai->nip }}" required autofocus>

                                @if ($errors->has('nip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>

                            <div class="col-md-6">
                                 <select name="jabatan_id" class="form-control">
                                @foreach ($jabatan as $data)
                                <option value="{{$data->id}}" <?php if ($pegawai->jabatan_id==$data->id) {echo "selected";} ?>>{{$data->nama_jabatan}}</option>
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
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                               <select name="golongan_id" class="form-control">
                                @foreach ($golongan as $data)
                                <option value="{{$data->id}}" <?php if ($pegawai->golongan_id==$data->id) {echo "selected";} ?>>{{$data->nama_golongan}}</option>
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
                                <form enctype="multipast/form-data" method="post">
                                    <label for="photo" class="col-md-4 control-label">Upload</label>
                                        <input type="file" name="photo" value="{{$pegawai->photo}}" required>
                            </div>

                    </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-0">  
                                <button type="submit" class="btn btn-primary">
                                    
                                         Simpan 
                                    
                                </button>
                            </div>
                        </div>
                        {!!Form :: close()!!}
               
            </div>
        </div>
     </div>
</div>

                       
                    
    
@endsection
