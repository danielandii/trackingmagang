<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="RcqJx4hM6gtp8Ul0jnptoJNFhgKqcBsww8CvCicI">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Admin Login</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="global_assets/js/main/jquery.min.js"></script>
    <script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="global_assets/js/plugins/forms/validation/validate.min.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="global_assets/js/demo_pages/form_validation.js"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">
                <!-- Login form -->
                <form class="login-form form-validate-jquery" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Admin Login</h5>
                                <span class="d-block text-muted">Masukan username dan password</span>
                            </div>
                            
                            @if ( session('error'))
                                <div class="alert alert-danger border-0 alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                                    {{ session('error') }}.
                                </div>
                            @endif

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                            </div>

                            <!-- <div class="text-center">
                                <a href="login_password_recover.html">Forgot password?</a>
                            </div> -->
                        </div>
                    </div>
                </form>
                <!-- /login form -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>
</html>


