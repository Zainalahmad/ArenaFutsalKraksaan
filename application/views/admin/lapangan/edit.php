<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<!-- <section class="content-header">
				<h1>Tambah Kota</h1>
			</section>

			<section class="content col col-md">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Tambah Kota</h3>
					</div>
					<?php foreach ($lapangan as $data){?>
					<form action="<?php echo base_url(). 'admin/lapangan/update/'.$data->id; ?>" method="post" class="form-horizontal">
						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama Kota</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="lapangan" value="<?php echo $data->lapangan ?>">
								</div>
							</div>
							<?php } ?>
						</div>
						<div class="box-footer">
							<a href="<?php echo base_url(); ?>admin/lapangan" class="btn btn-default">Batal</a>
							<button type="submit" class="btn btn-info pull-right" name="submit">Update</button>
						</div>
					</form>
				</div>
			</section> -->
			<section class="content">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">lapangan</h3>
						<?php foreach ($lapangan as $data){?>
						<form action="<?php echo base_url(). 'admin/lapangan/update/'.$data->id; ?>" method="post" class="form-horizontal">
					</div>
						<div class="box-body">
							<div class="form-group">
								<label>Foto Lapangan</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-image"></i>
									</div>
									<input name="img" type="file" class="form-control" value="<?php $data->img ?>" required />
								</div>
							</div>
							<div class="form-group">
								<label>Nama Lapangan</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-soccer-ball-o"></i>
									</div>
									<input name="lapangan" type="text" class="form-control" placeholder="Nama Lapangan" value="<?= $data->lapangan ?>" required/>
								</div>
							</div>
							<div class="form-group">
								<label>Harga Siang</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-money"></i>
									</div>
									<input name="harga_siang" type="text" class="form-control" value="<?= $data->harga_siang ?>"  placeholder="Harga Siang" required/>
								</div>
							</div>
							<div class="form-group">
								<label>Harga Malam</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-money"></i>
									</div>
									<input name="harga_malam" type="text" class="form-control" value="<?= $data->harga_malam ?>"  placeholder="Harga Malam" required/>
								</div>
							</div>
						<?php } ?>
						<input type="submit" class="btn btn-primary" />
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