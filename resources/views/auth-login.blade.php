<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.potenzaglobalsolutions.com/html/mentor-bootstrap-4-admin-dashboard-template/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 14:57:54 GMT -->
<head>
    <title>Login: Facturación Electrónica.</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body class="bg-white">
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->

            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <div class="login p-50">
                                        <h1 class="mb-2">Ingreso al Sistema</h1>
                                        <p>Bienvenido, por favor ingrese los datos.</p>
                                        <form id="sign_in_cli" method="POST" action="{{route('loginprocess')}}" class="mt-3 mt-sm-5">
                                            <div class="row">
                                                {{ csrf_field() }}
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">USUARIO</label>
                                                        <input type="text" class="form-control" name="user" placeholder="usuario" />
                                                        @if ($errors->has('codigo'))
                                                        <span class="error">{{ $errors->first('codigo') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">CONTRASEÑA</label>
                                                        <input type="password" class="form-control" name="password" placeholder="contraseña" />
                                                        @if ($errors->has('clave'))
                                                        <span class="error">{{ $errors->first('clave') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="from-group">
                                                        <label class="control-label">EMPRESA</label>
                                                        <select class="form-control" name="empresa">
                                                            <option value="1">Empresa 1</option>
                                                            <option value="2">Empresa 2</option>
                                                            <option value="3">Empresa 3</option>
                                                            <option value="4">Empresa 4</option>
                                                            <option value="5">Empresa 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-block d-sm-flex  align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                                            <label class="form-check-label" for="gridCheck">
                                                                Recordar
                                                            </label>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ml-auto">Olvidó contraseña?</a>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                        <button id="ingresar" type="submit" class="btn btn-primary waves-effect g-bg-cyan">INGRESO</button>
                                                </div>
                                               
                                                {{-- <div class="col-12  mt-3">
                                                    <p>Don't have an account ?<a href="auth-register.html"> Sign Up</a></p>
                                                </div> --}}
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                                
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="assets/img/bg/login.svg" alt="">
                                        
                                    </div>
                                </div>
                                <div class="box" style="position:relative">
                                    <h5 style="position:absolute;bottom:0;right:0;">Desarrollado por <a href="https://birobid.com" target="_blank">Birobid S.A.</a> <h5/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end login contant-->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->



    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>


</body>


<!-- Mirrored from themes.potenzaglobalsolutions.com/html/mentor-bootstrap-4-admin-dashboard-template/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 14:57:54 GMT -->
</html>