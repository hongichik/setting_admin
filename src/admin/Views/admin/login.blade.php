<!doctype html>
<html lang="vn">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập | LionDev</title>
    <link rel="icon" type="image/ico" href="{{ asset('installer/img/lion-5.ico') }}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('liondev_admin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('liondev_admin/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('liondev_admin/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><img class="logo-img" src="{{ asset('installer/img/lion-5.ico') }}" style="width: 100px;" alt="logo liondev"><span class="splash-description">Chào mừng bạn đến với trang quản trị của LionDev</span></div>
            <div class="card-body">
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('admin_checkLogin') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" id="gmail" type="text" placeholder="Gmail" autocomplete="off" pattern=".+@gmail.com" size="30" required>
                        @if($errors->has('email'))
                            <div class="alert alert-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Mật khẩu" size="30" minlength="6" required>
                        @if($errors->has('password'))
                            <div class="alert alert-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Ghi nhớ mật khẩu</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('liondev_admin/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('liondev_admin/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
 
</html>