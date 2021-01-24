<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah Lapangan</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Tambah Data</h1>
				<form action="<?php echo base_url(). 'admin/lapangan/add_lapangan'; ?>" method="post">
				</section>
				<section class="content">
					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Lapangan</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label>Foto Lapangan</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-image"></i>
									</div>
									<input name="img" type="file" class="form-control" required />
								</div>
							</div>
							<div class="form-group">
								<label>Nama Lapangan</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-soccer-ball-o"></i>
									</div>
									<input name="lapangan" type="text" class="form-control" placeholder="Lapangan" required/>
								</div>
							</div>
							<div class="form-group">
								<label>Harga Siang</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-money"></i>
									</div>
									<input name="harga_siang" type="text" class="form-control" placeholder="Harga Siang" required/>
								</div>
							</div>
							<div class="form-group">
								<label>Harga Malam</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-money"></i>
									</div>
									<input name="harga_malam" type="text" class="form-control" placeholder="Harga Malam" required/>
								</div>
							</div>
							<input type="submit" class="btn btn-primary" />
							</div>
						</div>
					</div>
				</section>
				</form> 
			</div>
			<div class="control-sidebar-bg"></div>
		</div>
		<?php $this->load->view('admin/common/scbawah'); ?>
	</body>
	</html>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create lapangan</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Create Data</h1>
			</section>
			<section class="content col col-md-6">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">lapangan</h3>
					</div>
					<form action="<?php echo base_url(). 'admin/lapangan/add_lapangan'; ?>" method="post" class="form-horizontal">
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-2 control-label">Nama Kota</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="lapangan" placeholder="Nama Kota">
								</div>
							</div>
						</div>
						<div class="box-footer">
							<button class="btn btn-default">Kembali</button>
							<button type="submit" class="btn btn-info pull-right" name="btnSubmit">Tambah</button>
						</div>
					</form>
				</div>
			</section>

		</div>
		<div class="control-sidebar-bg"></div>
	</div>
	<?php $this->load->view('admin/common/scbawah'); ?>
</body>
</html>