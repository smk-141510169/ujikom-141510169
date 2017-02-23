@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Kategori Lembur</div>
                <div class="panel-body">
                    
                         <form class="form-horizontal" action="{{route('kategori_lembur.update', $kategori_lembur->id)}}" method="POST">
                <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('kode_lembur') ? ' has-error' : '' }}">
                            <label for="kode_lembur" class="col-md-4 control-label">Kode lembur :</label>
                                <div class="col-md-6">
                                    <input type="text" name="kode_lembur" value="{{$kategori_lembur->kode_lembur}}" class="form-control">
                                    @if ($errors->has('kode_lembur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_lembur') }}</strong>
                                    </span>
                                @endif
                                </div>
                    </div>
                    <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan :</label>
                                <div class="col-md-6">
                                    <select name="jabatan_id" class="form-control">
                                @foreach ($jabatan as $data)
                                <option value="{{$data->id}}" <?php if ($kategori_lembur->jabatan_id==$data->id) {echo "selected";} ?>>{{$data->nama_jabatan}}</option>
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
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan :</label>
                                <div class="col-md-6">
                            <select name="golongan_id" class="form-control">
                                @foreach ($golongan as $golongan)
                                <option value="{{$golongan->id}}" <?php if ($kategori_lembur->golongan_id==$golongan->id) {echo "selected";} ?>>{{$golongan->nama_golongan}}</option>
                                @endforeach
                            </select>
                                </div>
                    </div>
                    <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                            <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang :</label>
                                <div class="col-md-6">
                                    <input type="text" name="besaran_uang" value="{{$kategori_lembur->besaran_uang}}" class="form-control">
                                    @if ($errors->has('besaran_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besaran_uang') }}</strong>
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
