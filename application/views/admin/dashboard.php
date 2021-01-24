<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Dashboard</h1>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-green">
							<div class="inner">
								<h3><?=$clapangan[0]->jumlah ?>
								</h3>
								<p>Lapangan</p>
							</div>
							<div class="icon">
								<i class="fa fa-soccer-ball-o"></i>
							</div>
							<a href="<?=base_url() ?>admin/lapangan" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-red">
							<div class="inner">
								<h3><?=$cbooking[0]->jumlah ?></h3>
								<p>Booking</p>
							</div>
							<div class="icon">
								<i class="fa fa-calendar"></i>
							</div>
							<a href="<?=base_url() ?>admin/Booking" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-blue">
							<div class="inner">
								<h3><?=$ctampil_transaksi[0]->jumlah ?></h3>
								<p>Butuh Konfirmasi</p>
							</div>
							<div class="icon">
								<i class="fa fa-location-arrow"></i>
							</div>
							<a href="<?=base_url() ?>admin/Payment" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			</section>
		</div>
		</section>
	</div>
	<div class="control-sidebar-bg"></div>
</div>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/dist/js/demo.js"></script>
</body>
</html>