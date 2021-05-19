<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE-edge">
            <title>Login Page</title>
            <link rel="stylesheet" href="style.css" media="screen" title="no title">
            <link href="{{asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
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
          <!-- <div class="avatar">
            <i class="fa fa-user"></i>
          </div> -->
          <div class="login">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">
                <!-- Login form -->
                <form class="login-form form-validate-jquery" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="card mb-0">
                        <div class="card-body">
                            <h2>LOGIN </h2>
                            <h2>PENGADUAN MASYARAKAT</h2>
                        </div>
                        @if ( session('error'))
                                <div class="alert alert-danger border-0 alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                                    {{ session('error') }}.
                                </div>
                            @endif
                            <div class="box-login">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>

                            <div class="box-login">
                                
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>

                            <div class="form-group">
                            <button type="submit" name="login" class="btn-login">Login</button></div>
                        </div>
</form>
                        </div>
                        </div>
        </body> 
    </html>