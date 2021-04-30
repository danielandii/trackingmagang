<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Aplikasi Pengaduan</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{asset('global_assets/css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	@yield('css')

</head>

<body>

    <!-- Main navbar -->
    @include('components.navbar')
	<!-- /main navbar -->

	<!-- Page content -->
	<div class="page-content">


		<!-- Main content -->
		<div class="content-wrapper">

			@yield('content')

			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>
				<div class="form-inline justify-content-center--">
        			
   				</div>
				<div class="navbar-collapse collapse" id="navbar-footer">
				<a target=" blank" herf="http//github.com">
            			<i class="icon-chrome mx-3 fa-2x text-red"></i>
        			</a>
        			<a href="https://www.facebook.com/norewebid" class="d-inline-block">
          				<i class="fab fa-facebook mx-3 fa-2x text-red"></i>
        			</a>
        			<a href="https://www.instagram.com/nore.web.id/" class="d-inline-block">
          				<i class="fab fa-instagram mx-3 fa-2x text-red"></i>
        			</a>
				<span class="navbar-text">
					&copy; 2021. <a href="http://nore.web.id" target="_blank">NORE</a>
					</span>
				
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


<!-- Core JS files -->
<script src="{{asset('global_assets/js/main/jquery.min.js') }}"></script>
<script src="{{asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
<!-- /core JS files -->

@yield('js')

</body>
</html>
