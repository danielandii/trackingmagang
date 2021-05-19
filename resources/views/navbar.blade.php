<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
<div class="navbar-nav ml-auto mr-1">
		<!-- <a href="{{ url('') }}" class="d-inline-block">
			<img src="{{asset('global_assets/images/logo.png') }}" alt="ters">
		</a> -->
		<a class="nav-link text-white @if(request()->segment(1) == "") disabled border
        border-warning border-top-0 border-left-0 border-right-0 @else active @endif" href="/home">
        PENGADUAN MASYARAKAT</a>
	</div>

	<div class="d-md-none">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
			<i class="icon-tree5"></i>
		</button>
		<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
			<i class="icon-paragraph-justify3"></i>
		</button>
	</div>

	<div class="collapse navbar-collapse" id="navbar-mobile">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
					<i class="icon-paragraph-justify3"></i>
				</a>
			</li>
		</ul>

		<span class="ml-md-3 mr-md-auto">&nbsp;</span>

		<ul class="navbar-nav">


			<li class="nav-item dropdown">
				<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
					<i class="icon-bell3"></i>
					<span class="d-md-none ml-2">Notification</span>
					<div id="countNotif"></div>
				</a>
				
				<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
					<div class="dropdown-content-header">
						<span class="font-weight-semibold">Notifikasi</span>
						<a href="#" id="clearbutton" class="text-default" data-popup="tooltip" title="Tandai sudah dibaca semua"><i style="font-size: 20px;color: #229c59;" class="far fa-calendar-check d-block top-0"></i></a>
					</div>

					<div class="dropdown-content-body dropdown-scrollable">
						<ul class="media-list" id="bodyNotif">
						</ul>
					</div>

					<div class="dropdown-content-footer justify-content-center p-0">
						<a href="" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Lihat Semua"><i class="icon-menu7 d-block top-0"></i></a>
					</div>
				</div>
			</li>

			<li class="nav-item dropdown dropdown-user">
				<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
					<img src="{{asset('global_assets/images/user-default.png') }}" class="rounded-circle mr-2" height="34" alt="">
					<span>{{\Auth::user()->nama}}</span>
				</a>

				<div class="dropdown-menu dropdown-menu-right">
					<!-- <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a> -->
					<a href="{{ url('/changepass') }}" class="dropdown-item"><i class="icon-cog5"></i> Ganti Password</a>
					<a href="{{ url('/logout') }}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
				</div>
			</li>
		</ul>
	</div>
</div>
