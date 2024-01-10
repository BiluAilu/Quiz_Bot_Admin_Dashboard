<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


       <!-- App favicon -->
       <link rel="shortcut icon" href="{{ asset('assets/images/robo-advisor.png') }}">

       <!-- jvectormap -->
       <link href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">


       <!-- App css -->
       <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

   </head>
</head>
<body class="account-body accountbg">

    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="assets/images/robo-advisor.png" height="60" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Login</h4>
                                    {{-- <p class="text-muted  mb-0">Sign in to continue to Dastone.</p> --}}
                                </div>
                            </div>
                            <div class="card-body p-0">

                                 <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">
                                        <form class="form-horizontal auth-form" action="{{route('login')}}" method="POST">
                                            @csrf
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="email">Email</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                                </div>
                                            </div><!--end form-group-->

                                            <div class="form-group mb-2">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                </div>
                                            </div><!--end form-group-->

                                            <div class="form-group row my-3">
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                        <label class="form-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-sm-6 text-end">
                                                    <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
                                                </div><!--end col-->
                                            </div><!--end form-group-->

                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button  class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div><!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->





                                    </div>

                                </div>
                            </div><!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">QuizBot © <script>
                                    document.write(new Date().getFullYear())
                                </script></span>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Log In page -->




    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>


       <!-- jQuery  -->
       <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
       <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
       <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
       <script src="{{ asset('assets/js/waves.js') }}"></script>
       <script src="{{ asset('assets/js/feather.min.js') }}"></script>
       <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
       <script src="{{ asset('assets/js/moment.js') }}"></script>
       <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

       <script src="{{ asset('plugins/apex-charts/apexcharts.min.js') }}"></script>
       <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
       <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
       <script src="{{ asset('assets/pages/jquery.analytics_dashboard.init.js') }}"></script>

       <!-- App js -->
       <script src="{{ asset('assets/js/app.js') }}"></script>


</body>
</html>
