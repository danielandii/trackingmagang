@extends('layouts.app')

@section('content')
						<!-- Vertical form -->
                        
                        <div class="container">
                            <div class="row justify-content-center my-5">
                                <div class="col-lg-12 col-md-12 col-xl-6">
                                    <div class="form-pengaduan">
                                    
                                        <div class="card-body">
                                            <form class="form-validate-jquery"  method="POST"  action="{{ route('pengaduan-simpan') }}" enctype="multipart/form-data">
											@csrf
                                            <div class=" text-center">
                                                <H3 class="text-uppercase font-weight-bold  " style="color:BAFF00">Tambah Pengaduan</H3>
                                            </div>

                                                <div class="box-form-pengaduan">
                                                    <label class="text-uppercase font-weight-bold  " style="color:BAFF00" for="tanggal_pengaduan">Tanggal Pengaduan</label>
                                                    <input type="date" name ="tanggal_pengaduan" class="form-control @error('tanggal_pengaduan') is-invalid @enderror">
													@error('tanggal_pengaduan')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
                                                </div>

                                                <div class="box-form-pengaduan">
                                                    <label class="text-uppercase font-weight-bold  " style="color:BAFF00" for="email" >email</label>
                                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
													@error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>


                                                <div class="box-form-pengaduan">
                                                    <label class="text-uppercase font-weight-bold  " style="color:BAFF00" for="laporan_pengaduan">Laporan Pengaduan</label>
                                                    <textarea name="laporan_pengaduan" rows="10" cols="4" class="form-control @error('laporan_pengaduan') is-invalid @enderror" placeholder="Default textarea"></textarea>
													@error('laporan_pengaduan')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="box-form-pengaduan">
                                                    <label class="text-uppercase font-weight-bold  " style="color:BAFF00" for="file">Input File</label>
                                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="file"/>
                                                </div>
                                                @error('file')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
    
                                                <div class="mt-4 text-center">
                                                    <button type="submit" class="btn-form-pengaduan">Submit<i class="icon-paperplane ml-2"></i></button>
                                                </div>
                                                <!-- <div class="brighttheme ui-pnotify-container brighttheme-notice ui-pnotify-shadow" role="alert" style="min-height: 16px;">
                                                    <div class="ui-pnotify-closer" aria-role="button" tabindex="0" title="Close" style="cursor: pointer; visibility: hidden;">
                                                        <span class="brighttheme-icon-closer"></span>
                                                    </div>
                                                    <div class="ui-pnotify-sticker" aria-role="button" aria-pressed="false" tabindex="0" title="Stick" style="cursor: pointer; visibility: hidden;">
                                                        <span class="brighttheme-icon-sticker" aria-pressed="false"></span>
                                                    </div>
                                                    <div class="ui-pnotify-icon">
                                                        <span class="brighttheme-icon-notice"></span>
                                                    </div>
                                                    <h4 class="ui-pnotify-title">Success notice</h4>
                                                    <div class="ui-pnotify-text" aria-role="alert">Check me out! I'm a notice.
                                                    </div>
                                                    <div class="ui-pnotify-action-bar" style="margin-top: 5px; clear: both; text-align: right; display: none;">
                                                    </div>
                                                </div> -->
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
@section('js')

	
	<!-- Global stylesheets -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css"> -->
    <link href="{{asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/form.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->


	<!-- Core JS files -->
	<script src="{{asset('global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{asset('global_assets/js/plugins/notifications/pnotify.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/notifications/bootbox.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>

    <script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/buttons/ladda.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/buttons/spin.min.js')}}"></script>
	<script src="{{asset('assets/js/app.js')}}"></script>
	
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->
    <script type="text/javascript">
		$( document ).ready(function() {
	        // Default style
	        @if(session('error'))
	            new PNotify({
	                title: 'Error',
	                text: '{{ session('error') }}.',
	                icon: 'icon-blocked',
	                type: 'error'
	            });
            @endif
            @if ( session('success'))
	            new PNotify({
	                title: 'Success',
	                text: '{{ session('success') }}.',
	                icon: 'icon-checkmark3',
	                type: 'success'
	            });
            @endif

		});
	</script>

@endsection
</html>
