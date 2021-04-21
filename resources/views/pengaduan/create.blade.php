@extends('layouts.app')

@section('content')
						<!-- Vertical form -->
                        
                        <div class="container">
                            <div class="row justify-content-center my-5">
                                <div class="col-lg-12 col-md-12 col-xl-6">
                                    <div class="card shadow">
                                    
                                        <div class="card-body">
                                            <form class="form-validate-jquery" action="{{route('pengaduan-simpan')}}" method="POST" enctype="multipart/form-data">
											@csrf
                                            <div class="card header">
                                                <H3 class="text-center">Tambah Pengaduan</H3>
                                            </div>

                                                <div class="form-group">
                                                    <label for="tanggal_pengaduan">Tanggal Pengaduan</label>
                                                    <input type="date" name ="tanggal_pengaduan" class="form-control @error('tanggal_pengaduan') is-invalid @enderror">
													@error('tanggal_pengaduan')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">email</label>
                                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
													@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                                                </div>


                                                <div class="form-group">
                                                    <label for="laporan_pengaduan">Laporan Pengaduan</label>
                                                    <textarea name="laporan_pengaduan" rows="10" cols="4" class="form-control @error('laporan_pengaduan') is-invalid @enderror" placeholder="Default textarea"></textarea>
													@error('laporan_pengaduan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="file">Input File</label>
<<<<<<< HEAD
                                                    <label for="formFileSm" class="form-label">Small file input example</label>
                                                    <input class="form-control form-control-sm" id="formFileSm" type="file" />
=======
                                                    <input type="file" name="file" id="alpaca25" class="alpaca-control @error('file') is-invalid @enderror" name="" autocomplete="off">
													@error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
<<<<<<< HEAD
=======
                                                    <div class="file-caption form-control kv-fileinput-caption icon-visible" tabindex="500">
                                                        <span class="file-caption-icon"><i class="glyphicon glyphicon-file"></i></span>
                                                        <input class="file-caption-name" onkeydown="return false;" onpaste="return false;" placeholder="Select file..." title="No file selected">
                                                    </div>
                                                    <div class="input-group-btn input-group-append">
                                                        <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-file-plus mr-2"></i>  
                                                            <span class="hidden-xs">Browse</span><input type="file" class="file-input" data-show-preview="false" data-fouc="" id="1618976309910_56">
                                                        </div>
                                                    </div>
>>>>>>> f385f3d8c42574f73d0ea17dfda617047c0b7fe5
>>>>>>> 8a0e9dfc0e2a6d50fb4201881bc9ef7421fbba5c
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
