<!DOCTYPE html>
<html>
<head>
	<!-- Page Title -->
	<title>Booking</title>
	
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Travelo | Responsive HTML5 Travel Template">
	<meta name="author" content="SoapTheme">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Theme Styles -->
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/animate.min.css">
	
	<!-- Current Page Styles -->
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/revolution_slider/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/revolution_slider/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/flexslider/flexslider.css" media="screen" />
	
	<!-- Main Style -->
	<link id="main-style" rel="stylesheet" href="<?=base_url() ?>gudang/css/style.css">
	<link id="main-style" rel="stylesheet" href="<?=base_url() ?>gudang/css/pretty-checkbox.min.css">
	
	<!-- Custom Styles -->
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/custom.css">

	<!-- Updated Styles -->
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/updates.css">
	
	<!-- Responsive Styles -->
	<link rel="stylesheet" href="<?=base_url() ?>gudang/css/responsive.css">


</head>
<body>
		<div class="page-title-container style4">
			<div class="container">
				<div class="page-title">
                    <i class="soap-icon-card"></i>
                    <h2 class="entry-title">Pemesanan</h2>
                </div>
				<ul class="breadcrumbs pull-right">
					<li class="active">Informasi Kontak</li>
					<li><a>Pembayaran</a></li>
					<li><a>Selesai</a></li>
				</ul>
			</div>
		</div>
		<section id="content" class="gray-area">
			<div class="container">
				<div class="row">
					<div id="main" class="col-sms-6 col-sm-6 col-md-7">
						<div class="booking-section travelo-box">

							<form action="<?=base_url(); ?>Booking/booking" class="booking-form" method="POST">
								<div class="person-information">
									<h2>Informasi Kontak</h2>
									<?php
									$wkwk = $user;

									if ($wkwk = $wkwk) {
										
									} else {
										// echo "Login atau register";
										echo "<a href=\"http://localhost/ukk/akun/login\">Login</a> atau <a href=\"http://localhost/ukk/akun/register\">Register</a>";
									}
									?>
									<?php foreach ($user as $key) {?>
									<div class="form-group row">
										<div class="col-sm-12">
											<label>Nama Lengkap</label>
											<input type="text" class="input-text full-width" value="<?=$key->nama ?>" placeholder="" disabled/>
										</div>
										<div class="col-sm-12">
											<label>Email</label>
											<input type="email" class="input-text full-width" value="<?=$key->email ?>" placeholder="" disabled/>
										</div>
										<div class="col-sm-12">
											<label>Nomor Telepon</label>
											<input type="text" class="input-text full-width" value="<?=$key->telepon ?>" placeholder="" disabled/>
										</div>
										<input type="hidden" name="id_users" value="<?=$key->id ?>">
										<input type="hidden" name="telepon" value="<?=$key->telepon ?>">


										<div class="col-sm-6">
											<label>Lapangan</label>
											<div class="selector">
												<select class="full-width" name="lapangan" id="lapangan" class="lapangan" required>
													<option value="">Pilih Lapangan</option>
													<?php
                                    				foreach($lapangan as $row):?>
				    							<option value="<?php echo $row->id_lapangan;?>"><?php echo $row->lapangan;?></option>
				    							<?php endforeach;?>
												</select>
											</div>
										</div>
									
										<div class="col-sm-6">
											<label>Tanggal</label>
											<div class="form-group row">
												<div class="col-xs-12">
													<div class="datepicker-wrap">
														<input name="tanggal_booking" type="text" class="input-text full-width" placeholder="Tanggal" >
													</div>
												</div>
											</div>
										</div>

										<!-- <?php echo ' .'; ?> -->

										<div class="col-sm-6" hidden>
											<label>Harga Per Jam</label>
											<div class="form-group row">
												<div class="col-xs-12" >
													<div class="">
												<select class="form-control" id="harga" name="harga" required>
				    						<option value="">No Selected</option>
											    </select>
											</div>
										</div>
										</div>
									</div>


										<div class="col-sm-6">
											<label>Jam</label>
											<div class="form-group row">
												<div class="col-xs-12">
													<div class="">
														<input name="jam_mulai" id="jam_mulai" type="time" class="input-text full-width" placeholder="Jam">
													</div>
												</div>
											</div>
										</div>

										
										<div class="col-sm-6">
											<label>Durasi</label>
											<div class="form-group row">
												<div class="col-xs-12">
													<div class="">
													<input type="number" name="durasi" id="durasi" class="input-text" placeholder="Durasi">
													</div>
												</div>
											</div>
										</div>
																

									<div class="col-sm-6">
										<label>Total Harga</label>
										<div class="form-group row">
											<div class="col-xs-12">
											<input type="number" class="form-control" id="total_harga" name="total_harga" required>
											</div>
										</div>
									</div>
										</div>
									
									</div>


								<div class="form-group row">
										<div class="col-sm-6 col-md-5">
											<button type="submit" class="full-width btn-large">BOOKING</button>
										</div>
									</div>
									<?php } ?>
								</form>
								</div>
						</div>
					<div class=" col-sms-6 col-sm-6 col-md-5"> 		
						<div class="booking-details travelo-box">
							<h4>Booking Details</h4>
							
							<table class="table">
								<tr>
									<!-- <th>ID</th> -->
									<!-- <th>TANGGAL TRANSAKSI</th> -->
									<!-- <th>USER</th> -->
									<th style="text-align: center;">Tanggal Booking</th>
									<th style="text-align: center;">Lapangan</th>
									<th style="text-align: center;">Jam</th>
									<th></th>
								</tr>
								<?php foreach ($detail_booking as $data) {?>
								<tr>
									<!-- <td><?php echo $data->id_transaksi ?></td> -->
									<!-- <td><?php echo $data->tgl_transaksi ?></td> -->
									<!-- <td><?php echo $data->id_users ?></td> -->
									<td style="text-align: center;"><?php echo $data->tgl_booking ?></td>
									<td style="text-align: center;"><?php echo $data->lapangan ?></td>
									<td style="text-align: center;"><?php echo $data->jam_booking ?></td>
									<td style="text-align: center;">
										<?php if($data->status_bayar=='Belum Bayar'){ ?>
											<a href="<?php echo base_url('booking/pembayaran/'.$data->id_transaksi) ?>" class="btn btn-warning btn-sm"><i class="fa fa-upload"></i> Pembayaran</a>
										<?php }elseif ($data->status_bayar=='Sudah Bayar'){ ?>
											<span class="label label-info"> <i class="fa fa-check"></i> <?php echo "Sudah Bayar </span>";
										}elseif ($data->status_bayar=='Konfirmasi') { ?>
											<span class="label label-success"> <i class="fa fa-ticket"></i> <?php echo "Terkonfirmasi </span>";
										}elseif($data->status_bayar=='Batal') { ?>
											<span class="label label-danger"> <i class="fa fa-times"></i> <?php echo "Transaksi Batal </span>";
										} ?>
									</td>
								</tr>
									</td>
								</tr>
								<?php } ?>
							</table>

							
						</div>

					</div>
				</div>
			</div>
		</section>

		<footer id="footer">
			<?php $this->load->view('common/footer'); ?>
		</footer>
	</div>

	<!-- Javascript -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery-1.11.1.min.js"></script>
	<script >
		$(document).on('ready',function(){
			var limit = <?php echo $_GET['seat_qty']?>-1;
			tjq("input[name='seat_code[]']").on('change',function(){
				if(tjq("input[name='seat_code[]']:checked").length >= limit ){
					tjq("input[name='seat_code[]']").not(':checked').attr('disabled',true);
					if( tjq("input[name='seat_code[]']:checked").length <= limit ){
						tjq("input[name='seat_code[]']").not(':checked').attr('disabled',false);
					}
				}
			})
		})
	</script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery.noconflict.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/modernizr.2.7.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery-ui.1.10.4.min.js"></script>

	<!-- Twitter Bootstrap -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/bootstrap.js"></script>

	<!-- load revolution slider scripts -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>

	<!-- load BXSlider scripts -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/components/jquery.bxslider/jquery.bxslider.min.js"></script>

	<!-- load FlexSlider scripts -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/components/flexslider/jquery.flexslider-min.js"></script>

	<!-- Google Map Api -->
	<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

	<!-- parallax -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery.stellar.min.js"></script>

	<!-- waypoint -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/waypoints.min.js"></script>

	<!-- load page Javascript -->
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/theme-scripts.js"></script>
	<script type="text/javascript" src="<?=base_url() ?>gudang/js/scripts.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script>

        $("#jam_mulai").change(function(){

            // variabel dari nilai combo box kendaraan
            var id_lapangan= $("#lapangan").val();
            var jam= $("#jam_mulai").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                url : "<?php echo base_url();?>booking/get_harga",
                method : "POST",
                data : {id_lapangan:id_lapangan,jam:jam},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].harga+'>'+data[i].harga+'</option>';
                    }
                    $('#harga').html(html);

                }
            });
        });


      $("#durasi").change(function(){
      	//alert("test");
            var harga= document.getElementById('harga').value;
            var durasi= document.getElementById('durasi').value;
var total_harga = parseInt(harga)*parseInt(durasi);
document.getElementById('total_harga').value=total_harga;

      	//alert(total_harga+'|'+harga+'|'+durasi);
});
	</script>

</body>
</html