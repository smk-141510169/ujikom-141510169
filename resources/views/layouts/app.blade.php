<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Penggajian Karyawan</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="navbar-brand">
                       Penggajian Karyawan
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                           </ul> 
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
                                <a href="{{ url('/kategori_lembur') }}"><i class="fa fa-fw fa-edit"></i> Kategori Lembur</a>
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
                
                  
                    
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
