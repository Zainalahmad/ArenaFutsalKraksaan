<!DOCTYPE html>
<html>
<head>
    <!-- Page Title -->
    <title>Arena Futsal Kraksaan</title>    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/animate.min.css">
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/style.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/css/responsive.css">
</head>
<body>
    <?php $this->load->view('common/header'); ?>
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Register</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">AKUN</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>

<!-- REGISTER -->
    <div id="travelo-signup" class="signup-box" style="padding-top: 65px; width: 300px; margin: 0 auto;">
        <div class="seperator" style="text-align: center;"><label>DAFTAR</label></div>
            <?php echo form_open('akun/register');?>
            <div class="form-group">
                <input type="text" class="input-text full-width" name="name" placeholder="Nama Lengkap" value="<?php echo set_value('name'); ?>" required>
                <p><?php echo form_error('name'); ?></p>
            </div>
            <div class="form-group">
                <input type="text" class="input-text full-width" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>" required>
                <p><?php echo form_error('username') ?></p>
            </div>
            <div class="form-group">
                <input type="text" class="input-text full-width" placeholder="Alamat Email" name="email" value="<?php echo set_value('email'); ?>" required>
                <p><?php echo form_error('email') ?></p>
            </div>
            <div class="form-group">
                <input type="text" class="input-text full-width" placeholder="Telepon" name="telepon" value="<?php echo set_value('telepon'); ?>" required>
                <p><?php echo form_error('telepon') ?></p>
            </div>
            <div class="form-group">
                <input type="password" class="input-text full-width" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>" required>
                <p><?php echo form_error('password') ?></p>
            </div>
            <div class="form-group">
                <input type="password" class="input-text full-width" placeholder="Konfirmasi Password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" required>
                <p><?php echo form_error('password_conf') ?></p>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Berlangganan email
                    </label>
                </div>
            </div>
            <div class="form-group">
                <p class="description">Mendaftar berarti mematuhi semua peraturan.</p>
            </div>
            <button type="submit" class="full-width btn-medium" name="btnSubmit" value="Daftar">DAFTAR</button>
            <?php echo form_close();?>
        <div class="seperator"></div>
        <p>Sudah mempunyai akun? <a href="<?php echo base_url(); ?>akun/login">Masuk</a></p>
    </div>
    <!-- RAMPUNG REGISTER -->
    <footer id="footer">
            <?php $this->load->view('common/footer'); ?>
    </footer>
    </div>
<?php $this->load->view('common/scbawah'); ?>  
</body>
</html>