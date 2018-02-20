<!DOCTYPE html>
<html>
<head>
    <title>Daun Biru</title>
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/component.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/component.css" type="text/css">
     <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/popper.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/font-awesome.min.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/w3.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/css.css" type="text/css">
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .w3-lobster {
    font-family: "Lobster", Sans-serif;
}
  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container">
    <img src="<?php echo base_url(); ?>images/logodaunbiru.jpg" alt="" height="65" width="200">
    <form class="form-inline my-2 my-lg-0">
        <nav id="cbp-hrmenu" class="cbp-hrmenu">
          <ul>
            <li>
              <a href="#">Produk</a>
              <div style="opacity: 0.9;" class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <a href="<?php echo base_url();?>produk/monita"><h4>Monita</h4></a>
                    <ul>
                      <li><a href="<?php echo base_url();?>produk/monita1">Monita AMR (Automatic Meter Reading) </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita1">Monita Engine Protection</a></li>
                      <li><a href="<?php echo base_url();?>produk/monita1">Monita Marine (Vessel Monitoring System)</a></li>
                      <li><a href="<?php echo base_url();?>produk/monita1">Monita Tanker Monitoring System </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita1">Monita Pembangkit (Power Generator) </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita1">Monita Penyulang (Feeder)</a></li>
                    </ul>
                   </div>
                  <div>
                    <a href="<?php echo base_url();?>produk/monita1"><h4>Haliza</h4></a>
                    <ul>
                      <li><a href="<?php echo base_url();?>produk/monita1">Haliza Reciprocating</a></li>
                    </ul>
                  </div>
            </li>
          </ul>
    </div>
    <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/cbpHorizontalMenu.min.js" type="text/javascript"></script>
    <script>
      $(function() {

        cbpHorizontalMenu.init();
      });
    </script>
                <input class="mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
            </form>
    </div>
</nav>

<div style="z-index: -2;" id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>images/about.jpg" width="1100" height="300">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>images/about.jpg" width="1100" height="300">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>images/about.jpg" width="1100" height="300">
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</li>
<div class="w3-container w3-lobster font-effect-brick-sign">
  <center><p class="w3-xxxlarge">Welcome To The Website!</p></center>
</div>
<br>
 <br>
  <br>
   <br><article class="card-post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-post card-deck">
                        <div class="card">

                            <a class="card-post-link" href="<?php echo base_url(); ?>images/U_R_-_TAEYEON_NIGHTCORE.mp4">
                            <?php
    $d = $this->db->query("Select*from gambar Where id=20")->row()->nama_file;
    echo "<video controls=controls width=340 height=183 src=\"" . base_url() . "images/$d\" />
       <video>
       ;"
    ?>

                            </a>
                        </div>

                        <div class="card">
                            <a class="card-post-link" href="<?php echo base_url(); ?>images/U_R_-_TAEYEON_NIGHTCORE.mp4">
                          <?php
    $d = $this->db->query("Select*from gambar Where id=20")->row()->nama_file;
    echo "<video controls=controls width=340 height=183 src=\"" . base_url() . "images/$d\" />
       <video>
       ;"
    ?>
                            </a>
                        </div>

                        <div class="card">
                            <a class="card-post-link" href="<?php echo base_url(); ?>images/U_R_-_TAEYEON_NIGHTCORE.mp4">
                            <?php
    $d = $this->db->query("Select*from gambar Where id=20")->row()->nama_file;
    echo "<video controls=controls width=340 height=183 src=\"" . base_url() . "images/$d\" />
       <video>
       ;"
    ?>
                            </a>
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="card-post card-deck">
                        <div class="card">
                            <a class="card-post-link" href="<?php echo base_url(); ?>images/11-1-3d6757f7ce74eadecba452e746629399.jpg">
                            <?php
$d = $this->db->query("Select*from gambar Where id=16")->row()->nama_file;
echo "<img width=348 height=183 src=\"" . base_url() . "images/$d\" />";
?>
                            </a>
                        </div>

                        <div class="card">
                            <a class="card-post-link" href="<?php echo base_url(); ?>images/05588c3598e9819472085f2805da01a5--red-velvet-irene.jpg">
                            <?php
$d = $this->db->query("Select*from gambar Where id=18")->row()->nama_file;
echo "<img width=348 height=183 src=\"" . base_url() . "images/$d\" />";
?>
                            </a>
                        </div>

                       <div class="card">
                            <a class="card-post-link" href="<?php echo base_url(); ?>images/20160422_Suzy_3.jpg">
                           <?php
$d = $this->db->query("Select*from gambar Where id=17")->row()->nama_file;
echo "<img width=348 height=183 src=\"" . base_url() . "images/$d\" />";
?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</article>
    <br>
    <br>
    <br>
  <!-- Footer -->
     <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
<div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Copyright @2018</p>
</footer>
  </body>
</html>