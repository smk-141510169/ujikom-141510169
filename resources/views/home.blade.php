@extends('layouts.aa')

@section('content')
@if(Auth::user()->permision == 'admin')
<div class="container">
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Selamat Datang
                            <small>Hai, {{ Auth::user()->name }}</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>Home
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Anda Login Sebagai Admin
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Selamat Datang
                            <small>Hai, {{ Auth::user()->name }}</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>Home
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Anda Login Sebagai Pegawai
                </div>
            </div>
        </div>
    </div>
</div>

@endif
@endsection
