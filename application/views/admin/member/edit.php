<?php var_dump($users) ?>
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
			<section class="content-header">
				<h1>Create Data</h1>
				<?php foreach ($users as $key) { ?>
						<form action="<?php echo base_url(). 'admin/members/update/'.$key->id; ?>" method="post" class="form-horizontal">
				</section>
				<section class="content">
					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Users</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<div class="form-group">
									<label>Nama : </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nama" type="text" class="form-control" value="<?=$key->nama ?>" required/>
									</div>
									<label>Email : </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-building"></i>
										</div>
										<input name="email" type="text" class="form-control" value="<?=$key->email ?>" required/>
									</div>
									<label>Username : </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-building"></i>
										</div>
										<input name="username" type="text" class="form-control" value="<?=$key->username ?>" required/>
									</div>
									<label>Password : </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-building"></i>
										</div>
										<input name="" type="text" class="form-control" value="<?= md5('$key->password'); ?>" required/>
									</div>
									<label>Telepon : </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-building"></i>
										</div>
										<input name="telepon" type="text" class="form-control" value="<?=$key->telepon ?>" required/>
									</div>
									<label>Janis Kelamin : </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-building"></i>
										</div>
										<input name="jenkel" type="text" class="form-control" value="<?=$key->jenkel ?>" required/>
									</div>
									<?php } ?>
								</div>
								<input type="submit" value="Update" class="btn btn-primary" />
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