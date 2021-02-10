<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li> <a href=""> Welcome !<br> Selamat Berbelanja</li></a>				
					</ul>
					<ul class="header-links pull-right">
						<h5 style="color: #ffffff;">
						@if(Auth::guard('pembeli')->check())
                            {{Auth::guard('pembeli')->user()->nama}}
                        @endif
						</h5>
						<li><a href="{{ url('/logout_adm') }} "><i class="fa fa-user"></i>Log Out</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			
		</header>