<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create Transportation</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Create Data</h1>
				<form action="<?php echo base_url(). 'admin/transportation/add_transportation'; ?>" method="post" enctype="multipart/form-data">
				</section>
				<section class="content">
					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Transportation</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label>Logo</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-image"></i>
									</div>
									<input name="img" type="file" class="form-control" required />
								</div>
							</div>
							<div class="form-group">
								<label>Nama Pesawat</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-plane"></i>
									</div>
									<input name="name" type="text" class="form-control" placeholder="Pesawat" required/>
								</div>
							</div>
							<div class="form-group">
								<label>Kode Pesawat</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-qrcode"></i>
									</div>
									<input name="code" type="text" class="form-control" placeholder="Kode" required/>
								</div>
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea name="description" class="form-control" rows="3" placeholder="Deskripsi ..."></textarea>
							</div>
							<div class="form-group">
								<label>Jumlah Kursi</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-at"></i>
									</div>
									<input name="seat_qty" type="text" class="form-control" placeholder="qty" required/>
								</div>
							</div>
							<input type="submit" class="btn btn-primary" />
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