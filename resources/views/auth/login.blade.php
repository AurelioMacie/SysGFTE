<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>SGFTE</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon não muda-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Bootstrap css muda-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css não muda-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css não muda-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>
<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="theme-loader">
        <div class="loader-p"></div>
    </div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <form class="theme-form login-form" method="post" action="{{route('login')}}">
                        @csrf
                        <h4><strong>Aceder</strong></h4>
                        <h6>Por favor preencher corretamente</h6>
                        <div class="form-group">
                            <label>Endereço de Email</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" required="" placeholder="Test@gmail.com">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                <span class="form-bar"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password"required="" placeholder="*********">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                                @enderror

                                <span class="form-bar"></span>
                                <div class="show-hide"><span class="show">                         </span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">

                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <label for="remember_me">Lembrar senha</label>
{{--                                <span class="ml-2 text-sm text-gray-600">{{('Remember me')}}</span>--}}

                            </div>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{route('password.request')}}">
                                </a>
                            @endif

{{--                                <a class="link" href="forget-password.html">Forgot password?</a>--}}
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">
                                <strong>{{__('Acessar')}}</strong>
                            </button>
                        </div>

                        <p>Criar conta<a class="ms-2" href="register">Registar</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-wrapper end-->
<!-- latest jquery-->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>
<script src="../assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="../assets/js/bootstrap/popper.min.js"></script>
<script src="../assets/js/bootstrap/bootstrap.min.js"></script>
<!-- Plugins JS start-->
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="../assets/js/script.js"></script>
<!-- login js-->
<!-- Plugin used-->
</body>
</html>
