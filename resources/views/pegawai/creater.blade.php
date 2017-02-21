@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">Register User</div>
                <div class="panel-body">
                    
                         {!!Form ::open (['route'=>'pegawai.store','files'=>'true'])!!}

                        

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('permision') ? ' has-error' : '' }}">
                            <label for="permision" class="col-md-4 control-label">Permision</label>

                            <div class="col-md-6">
                                <select class="form-control" id="permision" name="permision">
                                    <option value="">----Pilih Permision----</option>
                                    <option value="pegawai">PEGAWAI</option>
                                    
                                </select>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
   


        <div class="col-md-6 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">Register Pegawai</div>
                <div class="panel-body">
                   

                        <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-4 control-label">NIP</label>

                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" value="{{ old('nip') }}" required autofocus>

                                @if ($errors->has('nip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Kode Jabatan</label>

                            <div class="col-md-6">
                                <select class="form-control" name="jabatan_id">
                                    <option></option>
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
                                    <option></option>
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
                                <form enctype="multipast/form-data" method="post">
                                    <label for="photo" class="col-md-4 control-label">Upload</label>
                                        <input type="file" name="photo" />
                            </div>

                    </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-0">  
                                <button type="submit" class="btn btn-primary">
                                    
                                         Simpan Data User Dan Pegawai
                                    
                                </button>
                            </div>
                        </div>
                        {!!Form :: close()!!}
               
            </div>
        </div>
     </div>
</div>

                       
                    
    
@endsection
