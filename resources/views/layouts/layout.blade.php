<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home.index') }}" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->


        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->

            <li class="nav-item">
                <a class="nav-link" data-slide="true" href="{{route('logout')}}" role="button">
                    <i class="fa fa-share"></i>

                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('assets/front/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('home.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Главная</p>
                        </a>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Заявки
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('message.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Новая заявка</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('message.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Список заявок</p>
                                </a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Feedback Form</b>
        </div>

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{ asset('assets/front/js/front.js') }}"></script>
<script src="{{asset('assets/front/js/jquery.maskedinput.min.js')}}"></script>
<script>
    $('.nav-sidebar a').each(function(){
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
        let link = this.href;
        if(link == location){
            $(this).addClass('active');
            $(this).closest('.has-treeview').addClass('menu-open');
        }
    });
</script>
<script>
    $(function(){
        //Использование параметра completed
        $("#phone").mask("8(999) 999-9999", {
            completed: function(){ alert("Вы ввели номер: " + this.val()); }
        });
    });
</script>

</body>
</html>
