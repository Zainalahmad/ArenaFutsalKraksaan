<!DOCTYPE html>
<html>
<head>
    <!-- Page Title -->
    <title>Jadwal Lapangan</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Travelo | Responsive HTML5 Travel Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/animate.min.css">
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/style.css">
    
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
</head>
<body>
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Jadwal Lapangan</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                    <li class="active">JADWAL LAPANGAN</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
                    <div class="row">
                        <div class="col-sm-4 col-md-12">
                            <div class="travelo-box payment-box">
                                <div class="box">
							<div class="box-header">
								<h2 class="box-title">Payment</h2>

							</div>
							<div class="box-body" style="overflow-x:auto;">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Hari/Tanggal</th>
											<?php 
											for ($x = 8; $x <=24; $x++){ 
												if($x < 10): { ?>
											<th><?php echo '0'.$x;?>.00</th>
											<?php
												}else: {?>
											<th><?php echo $x;?>.00</th>
											<?php 
												}endif;
											} ?>
										</tr>
									</thead>
									<tbody>
										<th><?php echo $tanggal. '<br>'; ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
										<th><?php ?></th>
									</tbody>
								</table>
							</div>
						</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
<?php $this->load->view('common/scbawah'); ?>
</body>
</html>