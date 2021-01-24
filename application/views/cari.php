<!DOCTYPE html>
<html>
<head>
	<!-- Page Title -->
	<?php foreach ($rute as $data) { ?>
	<title>Tiket Pesawat <?php echo $data->dariiso; ?> ke <?php echo $data->keiso; ?> tanggal <?php echo date_format(date_create($data->depart_at), 'd M');  ?></title>
	<?php } ?>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="keywords" `tent="HTML5 Template" />
	<meta name="description" content="Travelo | Responsive HTML5 Travel Template">
	<meta name="author" content="SoapTheme">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Theme Styles -->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/css/animate.min.css">
	
	<!-- Current Page Styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>gudang/components/revolution_slider/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>gudang/components/revolution_slider/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>gudang/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>gudang/components/flexslider/flexslider.css" media="screen" />
	
	<!-- Main Style -->
	<link id="main-style" rel="stylesheet" href="<?php echo base_url() ?>gudang/css/style.css">
	
	<!-- Custom Styles -->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/css/custom.css">

	<!-- Updated Styles -->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/css/updates.css">
	
	<!-- Responsive Styles -->
	<link rel="stylesheet" href="<?php echo base_url() ?>gudang/css/responsive.css">
</head>
<body>
	<div id="page-wrapper">
		<?php $this->load->view('common/header'); ?>
		<div class="page-title-container">
			<div class="container">
				<div class="page-title pull-left">
					<h2 class="entry-title">Flight Search Results</h2>
				</div>
				<ul class="breadcrumbs pull-right">
					<li><a href="#">HOME</a></li>
					<li class="active">Flight Search Results</li>
				</ul>
			</div>
		</div>
		<section id="content">
			<div class="container">
				<div id="main">
					<div class="row">
						<div class="col-sm-4 col-md-3">
							<h4 class="search-results-title"><i class="soap-icon-search"></i><b>1,984</b> results found.</h4>
							<div class="toggle-container filters-container">
								<div class="panel style1 arrow-right">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#price-filter" class="collapsed">Price</a>
									</h4>
									<div id="price-filter" class="panel-collapse collapse">
										<div class="panel-content">
											<div id="price-range"></div>
											<br />
											<span class="min-price-label pull-left"></span>
											<span class="max-price-label pull-right"></span>
											<div class="clearer"></div>
										</div><!-- end content -->
									</div>
								</div>
								
								<div class="panel style1 arrow-right">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#flight-times-filter" class="collapsed">Flight Times</a>
									</h4>
									<div id="flight-times-filter" class="panel-collapse collapse">
										<div class="panel-content">
											<div id="flight-times" class="slider-color-yellow"></div>
											<br />
											<span class="start-time-label pull-left"></span>
											<span class="end-time-label pull-right"></span>
											<div class="clearer"></div>
										</div><!-- end content -->
									</div>
								</div>
								
								<div class="panel style1 arrow-right">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#flight-stops-filter" class="collapsed">Flight Stops</a>
									</h4>
									<div id="flight-stops-filter" class="panel-collapse collapse">
										<div class="panel-content">
											<ul class="check-square filters-option">
												<li><a href="#">1 Stop</a></li>
												<li><a href="#">2 Stops</a></li>
												<li class="active"><a href="#">3 Stops</a></li>
												<li><a href="#">MultiStops</a></li>
											</ul>
											<a class="button btn-mini">MORE</a>
										</div>
									</div>
								</div>
								
								<div class="panel style1 arrow-right">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#airlines-filter" class="collapsed">Airlines</a>
									</h4>
									<div id="airlines-filter" class="panel-collapse collapse">
										<div class="panel-content">
											<ul class="check-square filters-option">
												<li><a href="#">Major Airline<small>($620)</small></a></li>
												<li><a href="#">United Airlines<small>($982)</small></a></li>
												<li class="active"><a href="#">delta airlines<small>($1,127)</small></a></li>
												<li><a href="#">Alitalia<small>($2,322)</small></a></li>
												<li><a href="#">US airways<small>($3,158)</small></a></li>
												<li><a href="#">Air France<small>($4,239)</small></a></li>
												<li><a href="#">Air tahiti nui<small>($5,872)</small></a></li>
											</ul>
											<a class="button btn-mini">MORE</a>
										</div>
									</div>
								</div>
								
								<div class="panel style1 arrow-right">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#flight-type-filter" class="collapsed">Flight Type</a>
									</h4>
									<div id="flight-type-filter" class="panel-collapse collapse">
										<div class="panel-content">
											<ul class="check-square filters-option">
												<li><a href="#">Business</a></li>
												<li><a href="#">First class</a></li>
												<li class="active"><a href="#">Economy</a></li>
												<li><a href="#">Premium Economy</a></li>
											</ul>
											<a class="button btn-mini">MORE</a>
										</div>
									</div>
								</div>

								<div class="panel style1 arrow-right">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#inflight-experience-filter" class="collapsed">Inflight Experience</a>
									</h4>
									<div id="inflight-experience-filter" class="panel-collapse collapse">
										<div class="panel-content">
											<ul class="check-square filters-option">
												<li><a href="#">Inflight Dining</a></li>
												<li><a href="#">Music</a></li>
												<li class="active"><a href="#">Sky Shopping</a></li>
												<li><a href="#">Wi-fi</a></li>
												<li><a href="#">Seats &amp; Cabin</a></li>
											</ul>
											<a class="button btn-mini">MORE</a>
										</div>
									</div>
								</div>
								
								<div class="panel style1 arrow-right">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modify Search</a>
									</h4>
									<div id="modify-search-panel" class="panel-collapse collapse">
										<div class="panel-content">
											<form method="post">
												<div class="form-group">
													<label>Leaving from</label>
													<input type="text" class="input-text full-width" placeholder="" value="city, district, or specific airpot" />
												</div>
												<div class="form-group">
													<label>Departure on</label>
													<div class="datepicker-wrap">
														<input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
													</div>
												</div>
												<div class="form-group">
													<label>Arriving On</label>
													<div class="datepicker-wrap">
														<input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
													</div>
												</div>
												<br />
												<button class="btn-medium icon-check uppercase full-width">search again</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8 col-md-9">
							<div class="sort-by-section clearfix box">
								<h4 class="sort-by-title block-sm">Sort results by:</h4>
								<ul class="sort-bar clearfix block-sm">
									<li class="sort-by-name"><a class="sort-by-container" href="#"><span>name</span></a></li>
									<li class="sort-by-price"><a class="sort-by-container" href="#"><span>price</span></a></li>
									<li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>duration</span></a></li>
								</ul>
								
								<ul class="swap-tiles clearfix block-sm">
									<li class="swap-list active">
										<a href="flight-list-view.html"><i class="soap-icon-list"></i></a>
									</li>
									<li class="swap-grid">
										<a href="flight-grid-view.html"><i class="soap-icon-grid"></i></a>
									</li>
									<li class="swap-block">
										<a href="flight-block-view.html"><i class="soap-icon-block"></i></a>
									</li>
								</ul>
							</div>

							<?php foreach ($rute as $data) {?>
							<div class="flight-list listing-style3 flight">
								<article class="box">
									<figure class="col-xs-3 col-sm-2">
										<span><img alt="" src="<?=base_url(); ?>gudang/images/logo/<?=$data->img ?>"></span>
									</figure>
									<div class="details col-xs-9 col-sm-10">
										<div class="details-wrapper">
											<div class="first-row">
												<div>
													<h4 class="box-title"><?php echo $data->bandarafrom; ?> (<?php echo $data->isofrom; ?> )  - <?php echo $data->bandarato; ?> (<?php echo $data->isoto; ?> )
														<small><?php echo $data->maskapai; ?> (<?php echo $data->code; ?>)</small></h4>
												</div>
												<div>
													<span class="price"><small>Harga/orang</small>IDR. <?php echo $data->price; ?></span>
												</div>
											</div>
											<div class="second-row">
												<div class="time">
													<div class="take-off col-sm-4">
														<div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
														<div>
															<span class="skin-color">Pergi</span><br /><?php echo date_format(date_create($data->depart_at), 'H:i');  ?>
														</div>
													</div>
													<div class="landing col-sm-4">
														<div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
														<div>
															<span class="skin-color">Tiba</span><br /><?php echo date_format(date_create($data->arrival), 'H:i');  ?>
														</div>
													</div>
													<div class="total-time col-sm-4">
														<div class="icon"><i class="soap-icon-clock yellow-color"></i></div>
														<div>
															<?php 
																$date1 = new DateTime($data->depart_at);
																$date2 = new DateTime($data->arrival);
																$diff = $date1->diff($date2);
															 ?>
															<span class="skin-color">Lama Perjalanan</span><br /><?php echo $diff->h.' Jam '.$diff->i.' menit ' ?>
														</div>
													</div>
												</div>
												<div class="action">
													<a href="<?php echo base_url(); ?>pesawat/booking?id=<?=$data->id; ?>&seat_qty=<?=$seat_qty; ?>" class="button btn-small full-width">BOOKING</a>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<?php } ?>
							<a class="button uppercase full-width btn-large">load more listings</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<footer id="footer">
			<?php $this->load->view('common/footer'); ?>
		</footer>
	</div>

	<?php $this->load->view('common/scbawah'); ?>
</body>
</html>