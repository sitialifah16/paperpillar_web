<header class="header_area">

		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="beranda.blade.php"><img src={{asset ("assets/img/logo.png" )}} alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="beranda">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Courses</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{ route('courses') }}">UI</a></li>
									<li class="nav-item"><a class="nav-link" href="{{ route('courses') }}">UX</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Work</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>