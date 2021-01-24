<!DOCTYPE html>
<html>
<head>
	<!-- Page Title -->
	<title>My Account</title>
	
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Travelo | Responsive HTML5 Travel Template">
	<meta name="author" content="SoapTheme">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>gudang/components/revolution_slider/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>gudang/components/revolution_slider/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>gudang/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>gudang/components/flexslider/flexslider.css" media="screen" />
	<link id="main-style" rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/custom.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/updates.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/responsive.css">
</head>
<body>
	<?php $this->load->view('common/header'); ?>
	<div class="page-title-container">
		<div class="container">
			<div class="page-title pull-left">
				<h2 class="entry-title">My Account</h2>
			</div>
			<ul class="breadcrumbs pull-right">
				<li><a href="#">HOME</a></li>
				<li class="active">My Account</li>
			</ul>
		</div>
	</div>
	<section id="content" class="gray-area">
		<div class="container">
			<div id="main">
				<div class="tab-container full-width-style arrow-left dashboard">
					<ul class="tabs">
						<li class="active"><a data-toggle="tab" href="#dashboard"><i class="soap-icon-anchor circle"></i>Dashboard</a></li>
						<li class=""><a data-toggle="tab" href="#profile"><i class="soap-icon-user circle"></i>Profile</a></li>
						<li class=""><a data-toggle="tab" href="#booking"><i class="soap-icon-businessbag circle"></i>Booking</a></li>
						<!-- <li class=""><a data-toggle="tab" href="#settings"><i class="soap-icon-settings circle"></i>Settings</a></li> -->
					</ul>
					<div class="tab-content">
						<div id="dashboard" class="tab-pane fade in active">
							<?php foreach ($user as $kie) { ?>
							<h1 class="no-margin skin-color">Hi <?=$kie->nama ?>, Welcome to Tiket Om!</h1>
							<p>All your trips booked with us will appear here and you’ll be able to manage everything!</p>
							<div class="notification-area">
								<div class="info-box block">
									<span class="close"></span>
									<p>This is your Dashboard, the place to check your Profile, respond to Reservation Requests, view upcoming Trip Information, and much more.</p>
									<br />
									<ul class="circle">
										<li><span class="skin-color">Learn How It Works</span> — Watch a short video that shows you how Travelo works.</li>
										<li><span class="skin-color">Get Help</span> — View our help section and FAQs to get started on Travelo. </li>
									</ul>
								</div>
							</div>
						</div>
						<div id="profile" class="tab-pane fade">
							<div class="view-profile">
								<article class="image-box style2 box innerstyle personal-details">
									<figure>
										<a title="" href="#"><img width="270" height="263" alt="" src="<?php echo base_url(); ?>gudang/admin/dist/img/avatar5.png"></a>
									</figure>
									<div class="details">
										<!-- <a href="#" class="button btn-mini pull-right edit-profile-btn">EDIT PROFILE</a> -->
										<h2 class="box-title fullname"><?=$kie->nama ?></h2>
										<dl class="term-description">
											<dt>Name:</dt><dd><?=$kie->nama ?></dd>
											<dt>Email :</dt><dd><?=$kie->email ?></dd>
											<dt>Telepon :</dt><dd><?=$kie->telepon ?></dd>											
										</dl>
										<?php } ?>
									</div>
								</article>
								<hr>
								<h2>About You</h2>
								<div class="intro">
									<p>Vestibulum tristique, justo eu sollicitudin sagittis, metus dolor eleifend urna, quis scelerisque purus quam nec ligula. Suspendisse iaculis odio odio, ac vehicula nisi faucibus eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere semper sem ac aliquet. Duis vel bibendum tellus, eu hendrerit sapien. Proin fringilla, enim vel lobortis viverra, augue orci fringilla diam, sed cursus elit mi vel lacus. Nulla facilisi. Fusce sagittis, magna non vehicula gravida, ante arcu pulvinar arcu, aliquet luctus arcu purus sit amet sem. Mauris blandit odio sed nisi porttitor egestas. Mauris in quam interdum purus vehicula rutrum quis in sem. Integer interdum lectus at nulla dictum luctus. Sed risus felis, posuere id condimentum non, egestas pulvinar enim. Praesent pretium risus eget nisi ullamcorper fermentum. Duis lacinia nisi ac rhoncus vestibulum.</p>
								</div>
							</div>
							<div class="edit-profile">
								<form class="edit-profile-form">
									<h2>Personal Details</h2>
									<div class="col-sm-9 no-padding no-float">
										<div class="row form-group">
											<div class="col-sms-6 col-sm-6">
												<label>First Name</label>
												<input type="text" class="input-text full-width" placeholder="">
											</div>
											<div class="col-sms-6 col-sm-6">
												<label>Last Name</label>
												<input type="text" class="input-text full-width" placeholder="">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sms-6 col-sm-6">
												<label>Email Address</label>
												<input type="text" class="input-text full-width" placeholder="">
											</div>
											<div class="col-sms-6 col-sm-6">
												<label>Verify Email Address</label>
												<input type="text" class="input-text full-width" placeholder="">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sms-6 col-sm-6">
												<label>Country Code</label>
												<div class="selector">
													<select class="full-width">
														<option>United Kingdom (+44)</option>
														<option>United States (+1)</option>
													</select>
												</div>
											</div>
											<div class="col-sms-6 col-sm-6">
												<label>Phone Number</label>
												<input type="text" class="input-text full-width" placeholder="">
											</div>
										</div>
										<div class="row form-group">
											<label class="col-xs-12">Date of Birth</label>
											<div class="col-xs-4 col-sm-2">
												<div class="selector">
													<select class="full-width">
														<option value="">date</option>
													</select>
												</div>
											</div>
											<div class="col-xs-4 col-sm-2">
												<div class="selector">
													<select class="full-width">
														<option value="">month</option>
													</select>
												</div>
											</div>
											<div class="col-xs-4 col-sm-2">
												<div class="selector">
													<select class="full-width">
														<option value="">year</option>
													</select>
												</div>
											</div>
										</div>
										<hr>
										<h2>Contact Details</h2>
										<div class="row form-group">
											<div class="col-sms-6 col-sm-6">
												<label>Street Name</label>
												<input type="text" class="input-text full-width">
											</div>
											<div class="col-sms-6 col-sm-6">
												<label>Address</label>
												<input type="text" class="input-text full-width">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sms-6 col-sm-6">
												<label>City</label>
												<div class="selector">
													<select class="full-width">
														<option value="">Select...</option>
													</select>
												</div>
											</div>
											<div class="col-sms-6 col-sm-6">
												<label>Country</label>
												<div class="selector">
													<select class="full-width">
														<option value="">Select...</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sms-6 col-sm-6">
												<label>Region State</label>
												<div class="selector">
													<select class="full-width">
														<option value="">Select...</option>
													</select>
												</div>
											</div>
										</div>
										<hr>
										<h2>Upload Profile Photo</h2>
										<div class="row form-group">
											<div class="col-sms-12 col-sm-6 no-float">
												<div class="fileinput full-width">
													<input type="file" class="input-text" data-placeholder="select image/s">
												</div>
											</div>
										</div>
										<hr>
										<h2>Describe Yourself</h2>
										<div class="form-group">
											<textarea rows="5" class="input-text full-width" placeholder="please tell us about you"></textarea>
										</div>
										<div class="from-group">
											<button type="submit" class="btn-medium col-sms-6 col-sm-4">UPDATE SETTINGS</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div id="booking" class="tab-pane fade">
							<h2>Trips You have Booked!</h2>
							<div class="booking-history">
								<?php foreach ($inyong as $key) { ?>
								<div class="booking-info clearfix">
									<div class="date">
										<label class="month"><?php echo date_format(date_create($key->depart_at), 'M');  ?></label>
										<label class="date"><?php echo date_format(date_create($key->depart_at), 'd');  ?></label>
										<label class="day"><?php echo date_format(date_create($key->depart_at), 'D');  ?></label>
									</div>
									<h4 class="box-title"><i class="icon soap-icon-plane-right takeoff-effect yellow-color circle"></i>
										<?=$key->mktndol ?> (<?=$key->codemkt ?>) - <?=$key->blindol ?> (<?=$key->codebli ?>)
										<small>Name : <?=$key->name ?></small>
										<small>Seat Code : <?=$key->seat_code ?></small>
									</h4>
									<dl class="info">
										<dt>TRIP ID</dt>
										<dd><?=$key->reservation_code ?></dd>
										<dt>booked on</dt>
										<dd><?php echo date_format(date_create($key->reservation_date), 'd M Y H:i');  ?></dd>
									</dl>
									<button type="button" class="btn-mini status" onclick="printDiv('printableArea')" value="print a div!">UPCOMMING</button>
								</div>
								<?php } ?>
							</div>
						</div>
						<div id="settings" class="tab-pane fade">
							<h2>Account Settings</h2>
							<h5 class="skin-color">Change Your Password</h5>
							<form>
								<div class="row form-group">
									<div class="col-xs-12 col-sm-6 col-md-4">
										<label>Old Password</label>
										<input type="text" class="input-text full-width">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-xs-12 col-sm-6 col-md-4">
										<label>Enter New Password</label>
										<input type="text" class="input-text full-width">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-xs-12 col-sm-6 col-md-4">
										<label>Confirm New password</label>
										<input type="text" class="input-text full-width">
									</div>
								</div>
								<div class="form-group">
									<button class="btn-medium">UPDATE PASSWORD</button>
								</div>
							</form>
							<hr>
							<h5 class="skin-color">Change Your Email</h5>
							<form>
								<div class="row form-group">
									<div class="col-xs-12 col-sm-6 col-md-4">
										<label>Old email</label>
										<input type="text" class="input-text full-width">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-xs-12 col-sm-6 col-md-4">
										<label>Enter New Email</label>
										<input type="text" class="input-text full-width">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-xs-12 col-sm-6 col-md-4">
										<label>Confirm New Email</label>
										<input type="text" class="input-text full-width">
									</div>
								</div>
								<div class="form-group">
									<button class="btn-medium">UPDATE EMAIL ADDRESS</button>
								</div>
							</form>
							<hr>
							<h5 class="skin-color">Send Me Emails When</h5>
							<form>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Travelo has periodic offers and deals on really cool destinations.
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Travelo has fun company news, as well as periodic emails.
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> I have an upcoming reservation.
									</label>
								</div>
								<button class="btn-medium uppercase">Update All Settings</button>
							</form>
						</div>
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
<script>
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>
</html>