<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create Rute</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Create Data</h1>
				<form action="<?php echo base_url(). 'admin/rute/update_rute'; ?>" method="post">
					<?php foreach ($rute as $r){?>
				</section>
				<section class="content">
					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Rute</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label>Pesawat : </label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-plane"></i>
									</div>
									<select name="id_transportation" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true"><?php foreach ($transportation as $t){?>
										<option value="<?php echo $t->id ?>" <?php echo ($t->id==$r['idmaskapai']?'selected':''); ?>><?php echo $t->name ?></option><?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Dari Kota : </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-map-marker"></i>
										</div>
										<select name="kota_from" id="kota_from" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true"><?php foreach ($destination as $d){?>
											<option value="<?php echo $d->id ?>" <?php echo ($d->id==$r['idkotafrom']?'selected':''); ?>><?php echo $d->destination ?></option><?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label>Bandara : </label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-map-marker"></i>
											</div>
											<select name="rute_from" id="rute_from" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
												<?php echo $r['optionbandarafrom'] ?>
											</select>
										</div>
										<div class="form-group">
											<div class="form-group">
												<label>Ke Kota : </label>
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-map-marker"></i>
													</div>
													<select name="rute_to" id="kota_to" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true"><?php foreach ($destination as $d){?>
														<option value="<?php echo $d->id ?>" <?php echo ($d->id==$r['idkotato']?'selected':''); ?>><?php echo $d->destination ?></option><?php } ?>
													</select>
												</div>
												<div class="form-group">
													<label>Bandara : </label>
													<div class="input-group">
														<div class="input-group-addon">
															<i class="fa fa-map-marker"></i>
														</div>
														<select name="rute_to" id="rute_to" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
															<?php echo $r['optionbandarato'] ?>
														</select>
													</div>
													<div class="form-group">
														<label>Waktu Berangkat : </label>
														<div class="input-group">
															<div class="input-group-addon">
																<i class="fa fa-calendar"></i>
															</div>
															<input name="depart_at" type="text" id="datetimepicker"  class="form-control datepicker" value="<?php echo date_format(date_create($r['depart_at']),'Y/m/d H:i') ?>" required/>
														</div>
														<div class="form-group">
															<div class="form-group">
																<label>Waktu Sampai : </label>
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="fa fa-calendar"></i>
																	</div>
																	<input name="arrival" type="text" id="datetimepicker3" value="<?php echo date_format(date_create($r['arrival']),'Y/m/d H:i') ?>" class="form-control datepicker" required/>
																</div>
																<div class="form-group">
																	<label>Harga : </label>
																	<div class="input-group">
																		<div class="input-group-addon">
																			<i class="fa fa-money"></i>
																		</div>
																		<input name="price" type="text" class="form-control" value="<?php echo $r['price'] ?>" required/>
																		<input name="id" type="hidden" value="<?php echo $r['id'] ?>"/>
																	</div>
																</div>
																<input type="submit" class="btn btn-primary" />
															</div>
														</div>
													</section><?php } ?>
												</form> 
											</div>
											<div class="control-sidebar-bg"></div>
										</div>
										<?php $this->load->view('admin/common/scbawah'); ?>
										<script>
											$(function(){
												$(".datepicker").datetimepicker(
												{
													minDate: 0,
												});
												$("#kota_from").change(function() { 
													$.ajax({
														method: "GET",
														url: "<?=base_url()?>admin/rute/getairport/"+$("#kota_from").val(),
														type: "html"
													})
													.done(function( msg ) {
														$("#rute_from").html(msg);
													});
												});
												$("#kota_to").change(function() {
													$.ajax({
														method: "GET",
														url: "<?=base_url()?>admin/rute/getairport/"+$("#kota_to").val(),
														type: "html"
													})
													.done(function( msg ) {
														$("#rute_to").html(msg);
													});
												});

											});
										</script>
									</body>
									</html>