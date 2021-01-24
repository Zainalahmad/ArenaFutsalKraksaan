<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Manage Data</h1>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">User</h3>
							</div>
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Email</th>
											<th>Username</th>
											<th>Telepon</th>
											<th>Password</th>
											<th>Level</th>
											<th width="15%">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($users as $data){?>
										<tr>
											<td><?php  echo $no++; ?></td>
											<td><?php echo $data->nama ?></td>
											<td><?php echo $data->email ?></td>
											<td><?php echo $data->username ?></td>
											<td><?php echo $data->telepon ?></td>
											</td>
											<td>********</td>
											<td>
												<?php if ($data->level=='1' ) {
													echo "<b>Admin</b>";
												}else{
													echo "Member";
												} ?>
											</td>
											<td>
												<?php if ($data->level=='1' ) {
													echo "";
												}else { ?>
												<a type="button" href="<?=base_url('admin/members/edit/').$data->id?>" class="btn btn-default btn-sm"><span class="fa fa-pencil"> Edit</span></a>
												<a type="button" href="<?=base_url('admin/members/hapus_member/').$data->id?>" onclick="return confirm('Delete ?')" class="btn btn-default btn-sm"><span class="fa fa-trash"> Delete</span></a>
												<?php } ?>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="control-sidebar-bg"></div>
		</div>
		<?php $this->load->view('admin/common/scbawah'); ?>
	</body>
	</html>