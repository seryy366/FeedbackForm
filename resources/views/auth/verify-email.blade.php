<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <b>Необходимо подтверждение e-mail</b>
    </div>

    <div class="card">
        <div class="card-body register-card-body">

                <div class="input-group mb-3">


                    <div class="input-group-append">
                        <div class="input-group-text">
                            <a href="{{route('verification.notice')}}" class="">Отправить повторно</a>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">

                    <div class="input-group-append">
                        <div class="input-group-text">

                            <a href="{{route('logout')}}" class="">Выход</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-4 offset-8">

                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<script src="{{ asset('assets/front/js/front.js') }}"></script>
</body>
</html>
