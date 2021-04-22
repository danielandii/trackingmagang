@extends('layout')
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
                                    <form class="form-validate-jquery" action="http://127.0.0.1:8000/pengaduan-simpan" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="CBPKOyarZtd8aFeZQ7J0ILZ67g6IPK4NtVFpoXY1">                                            
                                        <div class="card header">
                                            <h3 class="text-center">Tanggapan</h3>
                                        </div>

                                      
                                            <div class="input-group custom-search-form">
                                                <input type="text" rows="10" class="form-control" name="search" placeholder="search...">
                                                <span class="input-group-btn">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> cari </buton>
                                                    </span>
                                                </span>
                                            </div>
                                       
                                        <div class="form-group">
                                            <label for="email">Laporan</label>
                                            <input type="text" name="email" class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <label for="laporan_pengaduan">Tanggapan</label>
                                            <textarea name="laporan_pengaduan" rows="10" cols="4" class="form-control " placeholder="Default textarea"></textarea>
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

@endsection