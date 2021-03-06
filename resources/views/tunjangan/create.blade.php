@extends('layouts.app')
@section('content')
<title>Golongan</title>
<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Tambah Tunjangan</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{route('tunjangan.store')}}" method="POST">	
					<div class="form-group{{ $errors->has('kode_tunjangan') ? ' has-error' : '' }}">
							<label for="kode_tunjangan" class="col-md-4 control-label">Kode Tunjangan </label>
								<div class="col-md-6">
									<input type="text" name="kode_tunjangan" placeholder="Kode Tunjangan" class="form-control" autofocus>
									@if ($errors->has('kode_tunjangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_tunjangan') }}</strong>
                                    </span>
                                @endif
								</div>
					</div>
					<div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan </label>
                                <div class="col-md-6">
                                    <select type="text" name="jabatan_id" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach($jabatan as $data)
                                    <option value="{!! $data->id !!}">{!! $data->nama_jabatan!!}</option>
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
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan </label>
                                <div class="col-md-6">
                                    <select type="text" name="golongan_id" class="form-control">
                                        <option value="">Pilih</option>
                                        @foreach($golongan as $data)
                                        <option value="{!! $data->id !!}">{!! $data->nama_golongan !!}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('golongan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('golongan_id') }}</strong>
                                    </span>
                                @endif
                                </div>
                    </div>

					<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
							<label for="status" class="col-md-4 control-label">Status </label>
								<div class="col-md-6">
									 <select type="text" name="status" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                      
                                    </select>
									@if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
								</div>
					</div>
                    
					<div class="form-group{{ $errors->has('jumlah_anak') ? ' has-error' : '' }}">
							<label for="jumlah_anak" class="col-md-4 control-label">Jumlah Anak </label>
								<div class="col-md-6">

									<input type="numeric" name="jumlah_anak" placeholder="Jumlah Anak" class="form-control">
									@if ($errors->has('jumlah_anak'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_anak') }}</strong>
                                    </span>
                                @endif
								</div>
					</div>
                              

					<div class="form-group{{ $errors->has('besaran_tunjangan') ? ' has-error' : '' }}">
							<label for="besaran_tunjangan" class="col-md-4 control-label">Besaran Uang </label>
								<div class="col-md-6">
									<input type="number" name="besaran_tunjangan" placeholder="Besaran Uang" class="form-control">
									@if ($errors->has('besaran_tunjangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besaran_tunjangan') }}</strong>
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