<!-- <nav class="navbar navbar-expand-lg navbar-dark " style="background-image:linear-gradient(to right,#1890c8,#1aa6e1, #1890c8);">
<a class="navbar-brand ml-1 p-0" href="/">
<img width="140" src="{{asset('img/applogo_white.png')}}" alt="logoapp"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button> -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
		<a href="http://127.0.0.1:8000/" class="d-inline-block">
			<img src="{{asset('global_assets/images/logo_light.png') }}" alt="">
		</a>
	</div>

    <div class="d-md-none">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
			<i class="icon-tree5"></i>
		</button>
		<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
			<i class="icon-paragraph-justify3"></i>
		</button>
	</div>

    <div class="collapse navbar-collapse " id="navbarnavAltMarkup">
    <div class="navbar-nav ml-auto mr-1">
        <a class="nav-link text-white @if(request()->segment(1) == "") disabled border
        border-warning border-top-0 border-left-0 border-right-0 @else active @endif" href="/">
        Home</a>
        <a class="nav-link text-white @if(request()->segment(1) == "lapor") disabled border
        border-warning border-top-0 border-left-0 border-right-0 @else active @endif" href="/form-pengaduan">
        Buat Pengaduan</a>
        <form action="{{url ('/pengaduan/cari')}}" class="form-inline my-2 my-lg-0" type="get">
					<input type="search" name="query" class="form-control mr-sm-2" placeholder="Cari No Tiket">
					<button class="btn btn-outline-light my-0 my-sm-0" type="submit">Search</button>
				</form>
        <!-- <a class="nav-link text-white @if(request()->segment(1) == "lapor") disabled border
        border-warning border-top-0 border-left-0 border-right-0 @else active @endif" href="/laporan-pengaduan">
        Laporan Pengaduan</a> -->
        <!-- <li class="nav-item dropdown">
         <div class="nav-link text-white dropdown-toggle active" id="navbarDropdownMenuLink">
            <a href="/laporan-pengaduan"class="dropdown-item">
                <i class="fas fa-clipboard fa-sm fa-fw mr-2"></i>
                Laporan Pengaduan
            </a> -->
            <!-- <a href="" class="nav-link text-white dropdown-toggle active" id="
            navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Laporan Pengaduan
            </a> -->
           
            <!-- <a href="">
            
            
            </a> -->
            </div>
        </li>
        <a class ="nav-link btn text-white" style="background-image;linear-gradient(to right,gold,#fff700)"href="/login">Login</a>
    </div>
</div>
</div>
