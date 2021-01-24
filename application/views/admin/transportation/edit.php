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
				<form action="<?php echo base_url(). 'admin/transportation/update'; ?>" method="post" enctype="multipart/form-data">
					<?php foreach ($transportation as $t) {?>
				</section>
				<section class="content">
					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Transportation</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label>Gambar</label>
								<div class="input-group">
									<img src="<?=base_url() ?>gudang/images/logo/<?php echo $t->img ?>" height="100px">
								</div>
							</div>
							<div class="form-group">
								<label>Logo</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-image"></i>
									</div>
									<input name="img" type="file" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label>Nama Pesawat</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-plane"></i>
									</div>
									<input name="name" type="text" class="form-control" placeholder="Pesawat" value="<?php echo $t->name ?>" required/>
								</div>
							</div>
							<div class="form-group">
								<label>Kode Pesawat</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-qrcode"></i>
									</div>
									<input name="code" type="text" class="form-control" value="<?php echo $t->code ?>"  placeholder="Kode" required/>
								</div>
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea name="description" class="form-control" rows="3"><?php echo $t->description ?></textarea>
							</div>
							<div class="form-group">
								<label>Jumlah Kursi</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-at"></i>
									</div>
									<input name="seat_qty" type="text" class="form-control" value="<?php echo $t->seat_qty ?>"  placeholder="qty" required/>
									<input name="id" type="hidden"  value="<?php echo $t->id ?>"/>
								</div>
							</div>
							<input type="submit" class="btn btn-primary" />
						</div>
					</div>
				</section>
				<?php } ?>
			</form> 
		</div>
		<div class="control-sidebar-bg"></div>
	</div>
	<?php $this->load->view('admin/common/scbawah'); ?>
</body>
</html>