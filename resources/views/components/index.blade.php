@extends('layouts.app')

@section('content')
<main data-spy="scroll" data-target=".area" data-offset="50">
    <div class="area" style="background:transparent url('/img/bg.jpg') no-repeat;background-size:
    cover">
    <div class="card card-body border-0" style="background-color:rgba(24,145,201,0.7);">
        <div class="masthead" >
            <div class="text-center" style="margin-bottom:400px;margin-top 120px">
                <div class="masthead-subheading">
                    <h1 class="text-uppercase font-weight-bold" style="color:gold;;">Aplikasi 
                    Pengaduan</h1>
                    <div class="container">
                        <h5 class="text-white text-center "><strong>Aplikasi 
                        Pengaduan</strong> Aplikasi yang diperuntukan untuk menyampaikan keluhan-keluhan
                         yang dirasakan oleh pelanggan tentang apapun yang diberikan oleh kami
                        <strong>mengadukan keluhan ataupun memberikan saran</strong> untuk kami
                        lebih baik</h5>
                    </div>
                    <a href="#fiturfitur" style="background-image:linear-gradient(to right,gold,#FFFF00"
                        class=btn mt-4 text-dark font-weight-bold p-3>Yuk Pelajari !</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- fiturfitur -->
    <section class="page-section mb-4 mt-4" id="fiturfitur">
        <div class="container">
            <div class="mt-4 text-center">
                <h1 class="text-uppercase font-weight-bold  "  style="color:#1890c8">Keunggulan</h1>
                <hr style="border-color:#1890c8;border-width:2px;">
            </div>
            <div class="row mt-4 text-center">
                <div class="col-md-4">
                    <span class="icon-phone mr-3 icon-3x fa-6x p-3 rounded" style="background-image:
                    linear-gradient(to right,#1890c8,#1aa61,#1890c8); color:red"></span>
                    <h2 class=""style="color:#1890c8">Respon Cepat</h2>
                    <p style="color:#1890c8">Petugas siap standby di depan layar dan akan 
                    merespon laporan kamu</p>
                </div>
                <div class="col-md-4">
                    <span class="icon-watch mr-3 icon-3x fa-6x p-3 rounded" style="background-image:
                    linear-gradient(to right,#1890c8,#1aa61,#1890c8); color:red"></span>
                    <h2 class=""style="color:#1890c8">Layanan 12 jam</h2>
                    <p style="color:#1890c8">Kamu akan dilayani oleh petugas desa mulai dari jam 7 pagi 
                    sampai jam 7 malam</p>
                </div>
                <div class="col-md-4">
                    <span class="icon-mic-off2 icon-3x fa-6x p-3 rounded" style="background-image:
                    linear-gradient(to right,#1890c8,#1aa61,#1890c8); color:red"></span>
                    <h2 class=""style="color:#1890c8">Aduanmu aman</h2>
                    <p style="color:#1890c8">Kami tidak akan megadu tentang pengaduan permasalahanmu 
                    selain kepada pihak yang berwajib</p>
                </div>
            </div>
        </div>
    </section>
    <!--tahapan-proses-laporan-->
    <section class="page-section mb-4 mt-4">
        <div class="card card-body border" style="background-image:linier-gradient(to right,#0b4761,#0e5c7d,#0b4761);">
                <div class="card-body">
                    <div class="mt-4 text-center">
                    <h1 class="text-uppercase font-weight-bold text-red">Tahapan proses laporan</h1>
                    <hr style="border-color:white:border-width:2px:">
                    </div>
                    <div class="row mt-4 text-center">
                        <div class="col-md-4">
                            <span class="fas fa-pencil-alt fa-5x p-3 rounded bg-white" style="color:#0e5c7d"></span>
                            <h3 class="" style="color:#0e5c7d">1. Anda menulis laporan</h3>
                        </div>
                        <div class="col-md-4">
                            <span class="fas fa-check fa-5x p-3 rounded bg-white" style="color:#0e5c7d"></span>
                            <h3 class="" style="color:#0e5c7d">2. Petugas akan melakukan validasi</h3>
                        </div>
                        <div class="col-md-4">
                            <span class="fas fa-comments fa-5x p-3 rounded bg-white" style="color:#0e5c7d"></span>
                            <h3 class="" style="color:#0e5c7d">3. Petugas akan memberikan tanggapan yang artinya laporan sudah di verivikasi</h3>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!--tahapan proses laporan-->
    <section class="page-section mb-4 mt-4" >
            <div class="card card=body border-0">
                <div class="card-body">
                    <div class="mt-4 text-center">
                        <h1 class="text-uppercese font-weight-bold" style="color:#0e5c7d">Apa kata mereka ?</h1>
                        <hr style="border-color:#0e5c7d;border-width:2px:">
                    </div>
                </div>
                <div class="row mt-4 text-center">
                    <div class="col-md-4">
                        <span class="fas fa-user fa-6x p-3 rounded bg-white" style=";
                        background-image:linear-gradient(to right,#0b4761,#0e5c7d,#064761);
                        color:#oe5c7d;color:white"></span>
                        <h2 class="" style="color:#0e5c7d">Fulan</h2>
                        <p class="" style="color:#0e5c7d"><i>"dengan adanya aplikasi appems,
                        proses pengaduan saya jadi lebih mudah dan tidak perlu datang ke lokasi"</i></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fas fa-user-secret fa-6x p-3 rounded bg-white" style=";
                        background-image:linear-gradient(to right,#0b4761,#0e5c7d,#064761);
                        color:#oe5c7d;color:white"></span>
                            <h2 class="" style="color:#0e5c7d">Fulin</h2>
                             <p class="" style="color:#0e5c7d"><i>"sangat bermanfaat dimasa pandemi seperti ini ,sehingga kita tidak perlu berkerumun kesana"</i></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fas fa-user-ninja fa-6x p-3 rounded bg-white" style="
                            background-image:linear-gradient(to right,#0b4761,#0e5c7d,#0b4761);
                            color:#0e5c7d;color:white"></span>
                            <h2 class="" style="color:#0e5c7d">Fulen</h2>
                            <p class="" style="color:#0e5c7d"><i>" Petugasnya cepat merespon,
                                tanggapannya mudah dimengerti dan dalam beberapa hari aduan 
                                saya terealisasi, terimakasih appems"</i></p>
                    </div>
                </div>    
            </div>
    </section>
</main>
<!-- <footer class="text-center text-white p-2 sticky-footer" style="background-image:linear-gradient(to
    right,#0b4761,#0e5c7d,#0b4761);color:#0e5c7d">
    <h5 class="text-uppercase">2021</h5>
    <p class="text-uppercase">find me </p>
    <div class="form-inline justify-content-center--">
        <a target=" blank" herf="http//github.com">
            <i class="icon-chrome mx-3 fa-2x text-white"></i>
        </a>
        <a href="https://www.facebook.com/norewebid" class="d-inline-block">
           <i class="fab fa-facebook mx-3 fa-2x text-white"></i>
        </a>
        <a href="https://www.instagram.com/nore.web.id/" class="d-inline-block">
          <i class="fab fa-instagram mx-3 fa-2x text-white"></i>
        </a>
    </div>
</footer> -->
@endsection
        
@section('js')

<!-- Theme JS files -->
	<script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/notifications/pnotify.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/notifications/bootbox.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/buttons/ladda.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/buttons/spin.min.js')}}"></script>

	<script src="{{asset('global_assets/js/demo_pages/components_modals.js')}}"></script>
	<script src="{{asset('assets/js/app.js')}}"></script>
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

