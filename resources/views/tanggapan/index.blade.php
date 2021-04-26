@extends('layout')
@section('content')
<div class="page-content">


<!-- Main content -->
<div class="content-wrapper">
<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Tanggapan</h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>

                            
                <!-- Vertical form -->
                <div class="container">
                    <div class="row justify-content-center my-5">
                        <div class="col-lg-12 col-md-12 col-xl-6">
                            <div class="card shadow">
                            
                                <div class="card-body">
                                    <form class="form-validate-jquery" action="http://127.0.0.1:8000/pengaduan-simpan" method="POST" enctype="multipart/form-data">                                          
                                        <div class="card header">
                                            <h3 class="text-center">Tanggapan</h3>
                                        </div>

                                      
                                            <div class="input-group custom-search-form">
                                                <input type="text" rows="5" class="form-control" name="search" placeholder="search...">
                                                <span class="input-group-btn">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> cari </buton>
                                                    </span>
                                                </span>
                                            </div>
                                       
                                        <div class="form-group">
                                            <label for="no_ticket">Laporan</label>
                                            <textarea name="laporan" rows="5" cols="4" class="form-control "></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_pengaduan">Tanggal Tanggapan</label>
                                            <input type="date" name ="tanggal_tanggapan" class="form-control @error('tanggal_tanggapan') is-invalid @enderror">
											@error('tanggal_tanggapan')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggapan">Tanggapan</label>
                                            <textarea name="tanggapan" rows="7" cols="7" class="form-control "></textarea>
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
@endsection
@section('js')

<!-- Theme JS files -->
<script src="{{asset('global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>

<script src="{{asset('assets/js/app.js') }}"></script>
<script src="{{asset('global_assets/js/demo_pages/dashboard.js') }}"></script>
<!-- /theme JS file@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-body shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('home-pengaduan.tampil') }}">
                            <i class="fas fa-arrow-circle-left fa-2x"></i>
                        </a>
                        <h4>Tanggapan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="get" accept-charset="utf-8">
                        <div class="form-group">
                            <label for="tanggapan">Tanggapan</label>
                            <textarea class="form-control" name="tanggapan" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-primary form-control" type="submit">Tanggapi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection@extends('layout')
@section('content')
<div class="page-content">


<!-- Main content -->
<div class="content-wrapper">

<!-- Vertical form -->

<div class="container">
<div class="row justify-content-center my-5">
<div class="col-lg-12 col-md-12 col-xl-6">
<div class="card shadow">

    <div class="card-body">
        <form class="form-validate-jquery" action="" method="POST" enctype="multipart/form-data">                                          
            <div class="card header">
                <h3 class="text-center">Tanggapan</h3>
            </div>

          
                <div class="input-group custom-search-form">
                    <input type="text" rows="5" class="form-control" name="search" placeholder="search...">
                    <span class="input-group-btn">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> cari </buton>
                        </span>
                    </span>
                </div>
           
            <div class="form-group">
                <label for="no_ticket">Laporan</label>
                <textarea name="laporan" rows="5" cols="4" class="form-control "></textarea>
            </div>

            <div class="form-group">
                <label for="tanggal_pengaduan">Tanggal Tanggapan</label>
                <input type="hidden" name ="tanggal_tanggapan" value="{{Carbon\Carbon::today()}}">
                <input type="hidden" name ="pengaduan_id" value="{{request()->route('id')}}">
            </div>

            <div class="form-group">
                <label for="tanggapan">Tanggapan</label>
                <textarea name="tanggapan" rows="7" cols="7" class="form-control "></textarea>
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
@endsection
@section('js')

<!-- Theme JS files -->
<script src="{{asset('global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>

<script src="{{asset('assets/js/app.js') }}"></script>
<script src="{{asset('global_assets/js/demo_pages/dashboard.js') }}"></script>
<!-- /theme JS files -->

@endsections -->

@endsection