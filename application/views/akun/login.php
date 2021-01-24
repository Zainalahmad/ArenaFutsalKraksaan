<!DOCTYPE html>
<html>
<head>
    <!-- Page Title -->
    <title>Login - Arena Futsal Kraksaan</title>    
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
                <h2 class="entry-title">Login</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="#">HOME</a></li>
                <li><a href="#">AKUN</a></li>
                <li class="active">Login</li>
            </ul>
        </div>
    </div>

    <!-- LOGIN -->
    <div id="travelo-login" class="login-box" style="padding-top: 65px; width: 300px; margin: 0 auto;">
    <?php
      if($this->session->flashdata('alert'))
      {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('alert').'</p>';
      }
    ?>
        <div class="seperator" style="text-align: center;"><label>LOGIN</label></div>
        <?php echo form_open('akun/login');?>
            <div class="form-group">
                <input type="text" class="input-text full-width" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
                <p><?php echo form_error('username'); ?></p>
            </div>
            <div class="form-group">
                <input type="password" class="input-text full-width" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">
                <p><?php echo form_error('password'); ?></p>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Ingat saya
                    </label>

                </div>
            </div>
        <button type="submit" class="full-width btn-medium"  name="btnSubmit" value="Login">LOGIN</button>
        <?php echo form_close();?>
        <a href="<?php echo base_url(); ?>akun/forgot" class="forgot-password pull-right">Lupa password?</a>
        <p>Belum mempunyai akun? <a href="<?php echo base_url(); ?>akun/register">Daftar</a></p>
    </div>
    <!-- RAMPUNG LOGIN -->
    <footer id="footer">
        <?php $this->load->view('common/footer'); ?>
    </footer>
</div>
<?php $this->load->view('common/scbawah'); ?>  
</body>
</html>