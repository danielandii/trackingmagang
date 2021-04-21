@extends('layouts.app')

@section('content')
						<!-- Vertical form -->
                        
                        <div class="container">
                            <div class="row justify-content-center my-5">
                                <div class="col-lg-12 col-md-12 col-xl-6">
                                    <div class="card shadow">
                                    
                                        <div class="card-body">
                                            <form action="{{route('pengaduan')}}" method="POST">
											@csrf
                                            <div class="card header">
                                                <H3 class="text-center">Tambah Pengaduan</H3>
                                            </div>

                                                <div class="form-group">
                                                    <label for="tanggal_pengaduan">Tanggal Pengaduan</label>
                                                    <input type="date" name ="tanggal_pengaduan" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">email</label>
                                                    <input type="text" name="email" class="form-control">
                                                </div>


                                                <div class="form-group">
                                                    <label for="laporan_pengaduan">Laporan Pengaduan</label>
                                                    <textarea name="laporan_pengaduan" rows="10" cols="4" class="form-control" placeholder="Default textarea"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="file">Input File</label>
                                                    <input type="file" name="file" id="alpaca25" class="alpaca-control" name="" autocomplete="off">
                                                </div>

                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary submitBtn">Submit form <i class="icon-paperplane ml-2"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
							
						</div>
						<!-- /vertical form --> 

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

@endsection

<head>
	
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>
</html>
