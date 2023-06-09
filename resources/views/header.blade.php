<header>

	@php $menusHtml = \App\Helpers\Helper::menus($menus); @endphp
	<!-- Header desktop -->
	<div class="container-menu-desktop">

		<div class="top-bar">
			<div class="content-topbar flex-sb-m h-full container">
				<div class="left-top-bar">
					Hotline đặt hàng miễn phí &nbsp;
					<i class="fa fa-phone" aria-hidden="true"></i> 0374001550
				</div>

				<div class="right-top-bar flex-w h-full">
					<a href="#" class="flex-c-m trans-04 p-lr-25">
						Help &amp; FAQs
					</a>

					<button id="signupButton">
						<a href="/admin/users/register" class="flex-c-m trans-04 p-lr-25">
							Đăng ký
						</a>					
					</button>

					<button id="signupButton">
						<a href="/admin/users/login" class="flex-c-m trans-04 p-lr-25">
							Đăng Nhập &nbsp;
							<h5><i class="fa fa-sign-in" aria-hidden="true"></i></h5>
						</a>
					</button>				

				</div>
				@if (Auth::check())
					<div>
					Bạn đang đăng nhập với quyền 
					@if( Auth::user()->level == 1)
						{{ "SuperAdmin" }}
					@elseif( Auth::user()->level == 2)
						{{ "Admin" }}
					@elseif( Auth::user()->level == 3)
						{{ "Thành viên" }}
					@endif
					</div>
					<div class="pull-right" style="margin-top: 3px;"><a class="btn btn-primary" href="/{{ url('/logout') }}">Đăng xuất</a></div>
					@endif
			</div>
		</div>

		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop container">

				<!-- Logo desktop -->
				<a href="/" class="logo">
					<img src="/template/images/icons/Brigita-removebg-preview(1).png" alt="IMG-LOGO">
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li class="active-menu"><a href="/">Trang Chủ</a></li>

						{!! $menusHtml !!}

						<li>
							<a href="contact.html">Liên Hệ</a>
						</li>
					</ul>
				</div>

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>

					<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" 
						data-notify="{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>

					<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
						<i class="zmdi zmdi-favorite-outline"></i>
					</a>
				</div>
			</nav>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->
		<div class="logo-mobile">
			<a href="index.html"><img src="/template/images/icons/Brigita-removebg-preview(1).png" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m m-r-15">
			<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
				<i class="zmdi zmdi-search"></i>
			</div>

			<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
				<i class="zmdi zmdi-shopping-cart"></i>
			</div>

			<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
				<i class="zmdi zmdi-favorite-outline"></i>
			</a>
		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>


	<!-- Menu Mobile -->
	<div class="menu-mobile">


		<ul class="main-menu-m">
			<li class="active-menu"><a href="/">Trang Chủ</a></li>

			{!! $menusHtml !!}

			<li>
				<a href="about.html">Về Chúng Tôi</a>
			</li>
		</ul>
	</div>

	<!-- Modal Search -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="/template/images/icons/icon-close2.png" alt="CLOSE">
			</button>

			<form class="wrap-search-header flex-w p-l-15">
				<button class="flex-c-m trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="plh3" type="text" name="search" placeholder="Search...">
			</form>
		</div>
	</div>
</header>