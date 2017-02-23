@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Data User</div>
                <div class="panel-body">
                    
                         {!!Form ::model($user,['method'=>'PATCH','route'=>['user.update',$user->id],'files'=>true])!!}
                       
       
                   

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">User Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
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

