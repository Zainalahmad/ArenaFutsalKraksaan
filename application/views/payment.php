<!DOCTYPE html>
<html>
<head>
	<!-- Page Title -->
	<title>Payment</title>
	
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Travelo | Responsive HTML5 Travel Template">
	<meta name="author" content="SoapTheme">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Theme Styles -->
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/animate.min.css">
	
	<!-- Current Page Styles -->
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/revolution_slider/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/revolution_slider/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/flexslider/flexslider.css" media="screen" />
	
	<!-- Main Style -->
	<link id="main-style" rel="stylesheet" href="<?=base_url() ?>gudang/css/style.css">
	<link id="main-style" rel="stylesheet" href="<?=base_url() ?>gudang/css/pretty-checkbox.min.css">
	
	<!-- Custom Styles -->
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/custom.css">

	<!-- Updated Styles -->
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/updates.css">
	
	<!-- Responsive Styles -->
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/responsive.css">
</head>
<body>

	<div id="page-wrapper">
		<?php $this->load->view('common/header'); ?>
		<div class="page-title-container style4">
			<div class="container">
				<div class="page-title">
                    <i class="soap-icon-plane-right takeoff-effect"></i>
                    <h2 class="entry-title">Pemesanan</h2>
                </div>
				<ul class="breadcrumbs pull-right">
					<li><a>Informasi Kontak</a></li>
					<li class="active">Pembayaran</li>
					<li><a>Selesai</a></li>
				</ul>
			</div>
		</div>
		
		<section id="content" class="gray-area">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sm-8 col-md-9">
                    	<div class="booking-information travelo-box">
                    		<h2>Pembayaran</h2>
                    		<hr>
                    		<div class="booking-confirmation clearfix">
                    			<!-- <i class="soap-icon-recommend icon circle"></i> -->
                    			<div class="message">
                    				<h4 class="main-message">Pesanan anda sudah kami terima silahkan melakukan pembayaran dan kirim bukti transfernya.</h4><br>
                    			</div>
                    		</div><br>
                    		<div class="col-md-5" style="padding-left: 0">
                    		<select id="kiebank" name="kiebank" class="input-text full-width"  onchange="myFunction(value)">
                    			<option value="">Pilih Bank</option>
                    			<option value="Bank : Mandiri<br>Rekening : 132982184982<br>Nama : Futsal Arena">Bank Mandiri</option>
                    			<option value="Bank : BCA<br>Rekening : 13298231982<br>Nama : Futsal Arena">Bank BCA</option>
                    			<option value="Bank : BRI<br>Rekening : 132981232182<br>Nama : Futsal Arena">Bank BRI</option>
                    		</select>
                    		</div>
                    		
                    		<div class="box-body" >
                    		<div class="col-md-5">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-image"></i>
									</div>
									<input name="bukti_tf" type="file" class="form-control" required />
								</div>
							</div>
						</div>
						
				

                    		<br><br>
                    		<div class="message" style="margin-top:15px;">
                    			<h4 id="bank" class="main-message"></h4> 
                    		</div>
                    		<hr>
                    		<form action="success" method="POST">
                    		<div class="form-group row">
                    			<div class="col-sm-6 col-md-5">
                    				<button type="submit" class="full-width btn-large">CONFIRM BOOKING</button>
                    			</div>
                    		</div>
                    		</form>
                    	</div>
                    </div>
                    <div class="sidebar col-sm-4 col-md-3">
                        <div class="travelo-box contact-box">
                            <h4>Need Travelo Help?</h4>
                            <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                <br>
                                <a class="contact-email" href="#">help@travelo.com</a>
                            </address>
                        </div>
                        <div class="travelo-box book-with-us-box">
                            <h4>Why Book with us?</h4>
                            <ul>
                                <li>
                                    <i class="soap-icon-hotel-1 circle"></i>
                                    <h5 class="title"><a href="#">135,00+ Hotels</a></h5>
                                    <p>Nunc cursus libero pur congue arut nimspnty.</p>
                                </li>
                                <li>
                                    <i class="soap-icon-savings circle"></i>
                                    <h5 class="title"><a href="#">Low Rates &amp; Savings</a></h5>
                                    <p>Nunc cursus libero pur congue arut nimspnty.</p>
                                </li>
                                <li>
                                    <i class="soap-icon-support circle"></i>
                                    <h5 class="title"><a href="#">Excellent Support</a></h5>
                                    <p>Nunc cursus libero pur congue arut nimspnty.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<footer id="footer">
			<?php $this->load->view('common/footer'); ?>
		</footer>
	</div>

	<!-- Javascript -->
	<script>
		function myFunction($i) {
			document.getElementById("bank").innerHTML = $i;
		}
	</script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery.noconflict.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/modernizr.2.7.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery-ui.1.10.4.min.js"></script>

	<!-- Twitter Bootstrap -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/bootstrap.js"></script>

	<!-- load revolution slider scripts -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>

	<!-- load BXSlider scripts -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/components/jquery.bxslider/jquery.bxslider.min.js"></script>

	<!-- load FlexSlider scripts -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/components/flexslider/jquery.flexslider-min.js"></script>

	<!-- Google Map Api -->
	<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

	<!-- parallax -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery.stellar.min.js"></script>

	<!-- waypoint -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/waypoints.min.js"></script>

	<!-- load page Javascript -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/theme-scripts.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/scripts.js"></script>

</body>
</html