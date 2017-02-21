<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penggajian Karyawan</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <div class="navbar-brand">
                       Penggajian Karyawan
                    </div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                            
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hai,
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout <i class="fa fa-fw fa-power-off">
                                        </a></i>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                     
                    @if(Auth::user()->permision == 'admin')
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> MENU <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="{{ url('/home') }}"><i class="fa fa-fw fa-home"></i> Home</a>
                            </li>
                            <li>
                                <a href="{{ url('/jabatan') }}"><i class="fa fa-fw fa-edit"></i> Jabatan</a>
                            </li>
                            <li>
                                <a href="{{ url('/golongan') }}"><i class="fa fa-fw fa-edit"></i> Golongan</a>
                            </li>
                            <li>
                                <a href="{{ url('/kategorilembur') }}"><i class="fa fa-fw fa-edit"></i> Kategori Lembur</a>
                            </li>
                            <li>
                                <a href="{{ url('/pegawai') }}"><i class="fa fa-fw fa-edit"></i> Pegawai</a>
                            </li>
                            <li>
                                <a href="{{ url('/lembur_pegawai') }}"><i class="fa fa-fw fa-edit"></i> Lembur Pegawai</a>
                            </li>
                            <li>
                                <a href="{{ url('/tunjangan') }}"><i class="fa fa-fw fa-edit"></i> tunjangan</a>
                            </li>
                            <li>
                                <a href="{{ url('/Penggajian') }}"><i class="fa fa-fw fa-edit"></i> Penggajian</a>
                            </li>
                            <li>
                                <a href="{{ url('/user') }}"><i class="fa fa-fw fa-edit"></i> User</a>
                            </li>
                            
                        </ul>
                    </li>

                    @else
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> MENU <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="{{ url('/home') }}"><i class="fa fa-fw fa-home"></i> Home</a>
                            </li>
                            <li>
                                <a href="{{ url('/pegawai') }}"><i class="fa fa-fw fa-edit"></i> Pegawai</a>
                            </li>
                            <li>
                                <a href="{{ url('/penggajian') }}"><i class="fa fa-fw fa-edit"></i> Penggajian</a>
                            </li>
                        </ul>
                    </li>

                   
                  @endif  

                    </li>
                </ul>
                @endif
                
              
           
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
@yield('content')
                <!-- Page Heading -->
                <!--<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>Dashboard
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>-->
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
