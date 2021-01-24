  <!DOCTYPE html>
  <html>
  <body>
    <!-- ================= HEADER ====================== -->
    <header id="header" class="navbar-static-top">
      <div class="topnav hidden-xs">
        <div class="container">    
          </ul>
          <ul class="quick-menu pull-right">
            <li class="ribbon currency">
              <a href="#" title="">MY ACCOUNT</a>
              <ul class="menu mini">
                <?php
                $wkwk = $user;

                if ($wkwk = $wkwk) {
                  echo "<li><a href=\"http://localhost/arenafutsal/akun/\" title=\"My Profile\">Profile</a></li>";
                  echo "<li><a href=\"http://localhost/arenafutsal/akun/logout\"  title=\"Logout\">Logout</a></li>";
                } else {
                  echo "<li><a href=\"http://localhost/arenafutsal/akun/login\"  title=\"Login\">Login</a></li>";
                  echo "<li><a href=\"http://localhost/arenafutsal/akun/register\"  title=\"Register\">Register</a></li>";
                }
                ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-header">
        <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
          Mobile Menu Toggle
        </a>
        <div class="container">
          <h1 class="navbar-brand">
            <a href="<?php echo base_url() ?>">
              <img src="<?php echo base_url(); ?>gudang/images/arn.png" width="300px" style="margin: 1px;padding: 0px color:white; alt="Travelo HTML5 Template" />
            </a>
          </h1>
          <nav id="main-menu" role="navigation">
            <ul class="menu">
              <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>"><b>Home</b></a>
              </li>
              <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>Lapangan"><b>Lapangan</b></a>
              </li>
              <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>Booking"><b>Booking</b></a>
              </li>
              <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>page/about"><b>Tentang Kami</b></a>
              </li>
              <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>page/kontak"><b>Hubungi Kami</b></a>
              </li>
            </ul>
          </nav>
        </div>
        <nav id="mobile-menu-01" class="mobile-menu collapse">
          <ul id="mobile-primary-menu" class="menu">
            <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>"><b>Home</b></a>
              </li>
              <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>Home"><b>Lapangan</b></a>
              </li>
              <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>Booking"><b>Booking</b></a>
              </li>
              <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>page/about"><b>Tentang Kami</b></a>
              </li>
              <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>page/kontak"><b>Hubungi Kami</b></a>
              </li>
          </ul>

          <ul class="mobile-topnav container">
            <li><a href="<?php echo base_url(); ?>akun">MY ACCOUNT</a></li>
            <li class="ribbon language menu-color-skin">
              <a href="#" data-toggle="collapse">ENGLISH</a>
              <ul class="menu mini">
                <li><a href="#" title="Dansk">Dansk</a></li>
                <li><a href="#" title="Deutsch">Deutsch</a></li>
                <li class="active"><a href="#" title="English">English</a></li>
              </ul>
            </li>
            <li><a href="#travelo-login" class="soap-popupbox">MASUK</a></li>
            <li><a href="#travelo-signup" class="soap-popupbox">DAFTAR</a></li>
            <li class="ribbon currency menu-color-skin">
              <a href="#">USD</a>
              <ul class="menu mini">
                <li><a href="#" title="AUD">AUD</a></li>
                <li><a href="#" title="BRL">BRL</a></li>
                <li class="active"><a href="#" title="USD">USD</a></li>
              </ul>
            </li>
          </ul>

        </nav>
      </div>
    </header>
  <!-- =========================HEADER================== -->

  <!-- ===================CONTENT=================   -->
  <?php $this->load->view($panelbody);?>
  <!-- ===================CONTENT=================   -->

  <!-- ===========FOOTER=================== -->
  <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h2>Laman Kami</h2>
                            <ul class="discover triangle hover row">
                                <li class="active col-xs-6"><a href="#">Home</a></li>
                                <li class="col-xs-6"><a href="#">Lapangan</a></li>
                                <li class="col-xs-6"><a href="#">Cara Booking</a></li>
                                <li class="col-xs-6"><a href="#">Tentang Kami</a></li>
                                <li class="col-xs-6"><a href="#">Hubungi Kami</a></li>
                                <li class="col-xs-6"><a href="#">Social Connect</a></li>
                                
                            </ul>
                        </div>
                        
                        <div class="col-sm-6 col-md-3">
                            <h2>Berlangganan Email</h2>
                            <p>Sign up for our mailing list to get latest updates and offers.</p>
                            <br />
                            <div class="icon-check">
                                <input type="text" class="input-text full-width" placeholder="your email" />
                            </div>
                            <br />
                            <span>We respect your privacy</span>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Tentang Kami</h2>
                            <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque.</p>
                            <br />
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                <br />
                                <a href="#" class="contact-email">arenafutsalkraksaan.com</a>
                            </address>
                            <ul class="social-icons clearfix">
                                <li class="twitter"><a title="twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                <li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                <li class="facebook"><a title="facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom gray-area">
                <div class="container">
                    <div class="pull-left">
                        <a href="index.html" title="Travelo - home">
                            <img src="<?php echo base_url(); ?>gudang/images/arn.png" width="300px" style="margin: 1px;padding: 0px color:white; alt="Travelo HTML5 Template" />
                        </a>
                    </div>
                    <div class="pull-right">
                        <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
                    </div>
                    <div class="copyright pull-right">
                        <p>&copy; 2020 ArenaFutsal</p>
                    </div>
                </div>
            </div>


  <!-- ===========FOOTER=================== -->
</body>
</html>