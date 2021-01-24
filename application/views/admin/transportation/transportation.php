<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Transportation</title>
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
								<h3 class="box-title">Transportation</h3>
								<div class="box-tools">
									<div class="input-group input-group-sm" style="width: 150px;">
										<!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
										<div class="input-group-btn">
											<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
										</div> -->
									</div>
								</div>
							</div>
							<!-- /.box-header -->
						<div class="box-body table-responsive no-padding">
							<table class="table table-hover">
							<tbody>
								<tr>
									<th width="5%">No</th>
									<th width="10%">Gambar</th>
									<th width="10%">Kode Pesawat</th>
									<th width="15%">Nama</th>
									<th width="30%">Deskripsi</th>
									<th width="10%">Penumpang</th>
									<th width="15%">Action</th>
									<?php $no = 1; ?>
								</tr><?php foreach ($transportation as $data){?>
								<tr>
									<td><?php  echo $no++; ?></td>
									<td><img src="<?php echo base_url(); ?>gudang/images/logo/<?php echo $data->img?>" width="100px" height="75px"></td>
									<td><?php echo $data->code ?></td>
									<td><?php echo $data->name ?></td>
									<td><?php echo $data->description ?></td>
									<td><?php echo $data->seat_qty ?></td>
									<td><a type="button" href="<?=base_url()  ?>admin/transportation/edit/<?php echo $data->id?>" class="btn btn-default btn-sm"><span class="fa fa-pencil"> Edit</span></a>
									<a type="button" href="<?=base_url()  ?>admin/transportation/del/<?php echo $data->id?>"  onclick="return confirm('Delete <?= $data->name ?>?')" class="btn btn-default btn-sm"><span class="fa fa-trash"> Delete</span></a></td>
								</tr><?php } ?>
							</tbody>
							</table>
						</div>  
					</div>
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