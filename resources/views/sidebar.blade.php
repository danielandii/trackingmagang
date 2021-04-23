
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

	<!-- Sidebar mobile toggler -->
	<div class="sidebar-mobile-toggler text-center">
		<a href="#" class="sidebar-mobile-main-toggle">
			<i class="icon-arrow-left8"></i>
		</a>
		Navigation
		<a href="#" class="sidebar-mobile-expand">
			<i class="icon-screen-full"></i>
			<i class="icon-screen-normal"></i>
		</a>
	</div>
	<!-- /sidebar mobile toggler -->


	<!-- Sidebar content -->
	<div class="sidebar-content">

		<!-- Main navigation -->
		<div class="card card-sidebar-mobile">
			<ul class="nav nav-sidebar" data-nav-type="accordion">

				<!-- Main -->
				<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Menu</div> <i class="icon-menu" title="Main"></i></li>

				<li class="nav-item">
					<a href="{{ url('/home') }}" class="nav-link {{ (request()->is('home*')) ? 'active' : '' }}">
						<i class="icon-home4"></i>
						<span>
							Dashboard
						</span>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="{{ url('/home-pengaduan') }}" class="nav-link {{ (request()->is('home-pengaduan*')) ? 'active' : '' }}">
						<i class="icon-pencil3"></i>
						<span>
							Laporan Pengaduan
						</span>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="{{ url('/home-tanggapan') }}" class="nav-link {{ (request()->is('home-tanggapan*')) ? 'active' : '' }}">
						<i class="icon-pencil3"></i>
						<span>
							Tanggapan
						</span>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="{{ url('/home-history') }}" class="nav-link {{ (request()->is('home-history*')) ? 'active' : '' }}">
						<i class="icon-pencil3"></i>
						<span>
							History Tanggapan
						</span>
					</a>
				</li>

			</ul>
		</div>
		<!-- /main navigation -->

	</div>
	<!-- /sidebar content -->
	
</div>