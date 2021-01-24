<header id="header" class="navbar-static-top">
	<div class="topnav hidden-xs">
		<div class="container">
			
				
			</ul>
			<ul class="quick-menu pull-right">
				<li class="ribbon currency">
					<a href="#" title="">MY ACCOUNT</a>
					<ul class="menu mini">
						<?php
						$wkwk = $data['user'];

						if ($wkwk = $wkwk) {
							echo "<li><a href=\"http://localhost/arenafutsal/akun/\" title=\"My Profile\">Profile</a></li>";
							echo "<li><a href=\"http://localhost/arenafutsal/akun/logout\"  title=\"Logout\">Logout</a></li>";
						} else {
							echo "<li><a href=\"http://localhost/arenafutsal/akun/login\"  title=\"Login\">Login</a></li>";
							echo "<li><a href=\"http://localhost/arenafutsal/akun/register\"  title=\"Register\">Register</a></li>";
						}
						?>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="main-header">
		<a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
			Mobile Menu Toggle
		</a>
		<div class="container">
			<h1 class="navbar-brand">
				<a href="<?php echo base_url() ?>">
					<img src="<?php echo base_url(); ?>gudang/images/arn.png" width="300px" style="margin: 1px;padding: 0px color:white; alt="Travelo HTML5 Template" />
				</a>
			</h1>
			<nav id="main-menu" role="navigation">
				<ul class="menu">
					<li class="menu-item-has-children">
						<a href="<?php echo base_url(); ?>"><b>Home</b></a>
					</li>
					<li class="menu-item-has-children">
						<a href="<?php echo base_url(); ?>Home"><b>Lapangan</b></a>
					</li>
					<li class="menu-item-has-children">
						<a href="<?php echo base_url(); ?>Booking"><b>Booking</b></a>
					</li>
					<li class="menu-item-has-children">
						<a href="<?php echo base_url(); ?>page/about"><b>Tentang Kami</b></a>
					</li>
					<li class="menu-item-has-children">
						<a href="<?php echo base_url(); ?>page/kontak"><b>Hubungi Kami</b></a>
					</li>
				</ul>
			</nav>
		</div>
		<nav id="mobile-menu-01" class="mobile-menu collapse">
			<ul id="mobile-primary-menu" class="menu">
				<li class="menu-item-has-children">
						<a href="<?php echo base_url(); ?>"><b>Home</b></a>
					</li>
					<li class="menu-item-has-children">
						<a href="<?php echo base_url(); ?>pesawat"><b>Lapangan</b></a>
					</li>
					<li class="menu-item-has-children">
						<a href="<?php echo base_url(); ?>page/booking"><b>Booking</b></a>
					</li>
					<li class="menu-item-has-children">
						<a href="<?php echo base_url(); ?>page/about"><b>Tentang Kami</b></a>
					</li>
					<li class="menu-item-has-children">
						<a href="<?php echo base_url(); ?>page/kontak"><b>Hubungi Kami</b></a>
					</li>
			</ul>

			<ul class="mobile-topnav container">
				<li><a href="<?php echo base_url(); ?>akun">MY ACCOUNT</a></li>
				<li class="ribbon language menu-color-skin">
					<a href="#" data-toggle="collapse">ENGLISH</a>
					<ul class="menu mini">
						<li><a href="#" title="Dansk">Dansk</a></li>
						<li><a href="#" title="Deutsch">Deutsch</a></li>
						<li class="active"><a href="#" title="English">English</a></li>
					</ul>
				</li>
				<li><a href="#travelo-login" class="soap-popupbox">MASUK</a></li>
				<li><a href="#travelo-signup" class="soap-popupbox">DAFTAR</a></li>
				<li class="ribbon currency menu-color-skin">
					<a href="#">USD</a>
					<ul class="menu mini">
						<li><a href="#" title="AUD">AUD</a></li>
						<li><a href="#" title="BRL">BRL</a></li>
						<li class="active"><a href="#" title="USD">USD</a></li>
					</ul>
				</li>
			</ul>

		</nav>
	</div>
</header>