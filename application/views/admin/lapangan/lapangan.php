<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>lapangan</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Manage Data</h1>
				<div class="row">
				</div>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h2 class="box-title">Lapangan</h2>

							</div>
							<div class="box-header">
								<a type="button" href="<?php echo base_url('admin/lapangan/add') ?>" class="btn btn-success btn-sm"><span class="fa fa-file-o"> Tambah</span></a>
							</div>
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="15px">No</th>
											<th >Gambar</th>
											<th>Nama Lapangan</th>
											<th>Harga Siang</th>
											<th>Harga Malam</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($lapangan as $data){?>
										<tr>
											<td><?php  echo $no++; ?></td>
											<td><img src="<?php echo base_url(); ?>gudang/images/logo/<?php echo $data->img?>" width="150px" height="100px"></td>
											<td><?php echo $data->lapangan ?></td>
											<td><?php echo $data->harga_siang ?></td>
											<td><?php echo $data->harga_malam ?></td>
											<td>
												<a type="button" href="<?php echo base_url('admin/lapangan/edit/'.$data->id_lapangan) ?>" class="btn btn-default btn-sm"><span class="fa fa-pencil"> Edit</span></a>
												<a type="button" href="<?php echo base_url('admin/lapangan/del/'.$data->id_lapangan) ?>"  onclick="return confirm('Delete <?=$data->lapangan ?> ?');" class="btn btn-default btn-sm"><span class="fa fa-trash"> Delete</span></a>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>
</div>
<div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/common/scbawah'); ?>
</body>
</html>