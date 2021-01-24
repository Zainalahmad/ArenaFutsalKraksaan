<!DOCTYPE html>
<html>
  <head>
    <!-- Page Title -->
    <title>Arena Futsal Kraksaan</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Dunia Tiket">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/animate.min.css">
    
    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>gudang/components/revolution_slider/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>gudang/components/revolution_slider/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>gudang/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>gudang/flexslider/flexslider.css" media="screen" />
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/style.css">
    <link id="main-style" rel="stylesheet" href="<?=base_url() ?>gudang/css/pretty-checkbox.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/responsive.css">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
  <![endif]-->
    <style>
      section#content {  min-height: 1000px; padding: 0; position: relative; overflow: hidden; }
      #main { padding-top: 200px; }
      .page-title, .page-description { color: #fff; }
      .page-title { font-size: 4.1667em; font-weight: bold; }
      .page-description { font-size: 2.5em; margin-bottom: 50px; }
      .featured { position: absolute; right: 50px; bottom: 50px; z-index: 9; margin-bottom: 0;  text-align: right; }
      .featured figure a { border: 2px solid #fff; }
      .featured .details { margin-right: 10px; }
      .featured .details > * { color: #fff; line-height: 1.25em; margin: 0; font-weight: bold; text-shadow: 2px -2px rgba(0, 0, 0, 0.2); }
    </style>
</head>
<body>
	<section id="content" class="slideshow-bg">
		<div id="slideshow">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="slidebg" style="background-image:url(gudang/images/slider/banner3.jpg)"></div>
					</li>
				</ul>
			</div>
		</div>


		<div class="container">
			<div id="main">
				<h1 class="page-title">Rasakan Pengalaman Bermain Futsal Yang Berbeda</h1>
				<h2 class="page-description col-md-6 no-float no-padding">Dengan fasilitas yang memuaskan.</h2>
				<div class="search-box-wrapper style2">
					<div class="search-box">
						<ul class="search-tabs clearfix">
							<li class="active"><a  data-toggle="tab"><i class="soap-icon-calendar-check"></i><span>DAFTAR LAPANGAN</span></a></li>
						</ul>
						<div class="visible-mobile">
							<ul id="mobile-search-tabs" class="search-tabs clearfix">
								<li class="active"><a>JADWAL LAPANGAN</a></li>
							</ul>
						</div>
						<div class="box-body">
							<table id="example1" class="table table-bordered ">
								<thead>
									<tr >
										<th style="text-align: center;" width="10px">No</th>
										<th style="text-align: center;" width="100px">Nama Lapangan</th>
										<th style="text-align: center;" width="75px">Harga siang</th>
										<th style="text-align: center;" width="75px">Harga Malam</th>										
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($lapangan as $data){?>
										<tr>
											<td style="text-align: center;" ><?php  echo $no++; ?></td>
											<td style="text-align: center;"><img src="<?php echo base_url(); ?>gudang/images/logo/<?php echo $data->img?>" width="300px" height="200px">  <?php echo $data->lapangan ?></td>
											<td style="text-align: center;"><?php echo $data->harga_siang ?></td>
											<td style="text-align: center;"><?php echo $data->harga_malam ?></td>							
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						
										</div>
									</div>
								</form>
							</div>
							<!-- TIKET PESAWAT -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $this->load->view('common/scbawah'); ?>
</body>
</html>