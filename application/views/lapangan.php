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
                    <h2 class="entry-title">Lapangan</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                    <li class="active">LAPANGAN</li>
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
                                            <td style="text-align: center;"><img src="<?php echo base_url(); ?>gudang/images/logo/<?php echo $data->img?>" width="150px" height="100px">  <?php echo $data->lapangan ?></td>
                                            <td style="text-align: center;"><?php echo $data->harga_siang ?></td>
                                            <td style="text-align: center;"><?php echo $data->harga_malam ?></td>                           
                                        </tr>
                                    <?php } ?>
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