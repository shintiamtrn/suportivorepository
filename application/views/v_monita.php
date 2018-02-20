<!DOCTYPE html>
<html>
<head>
    <title>Daun Biru</title>
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/w3.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/component.css" type="text/css">
     <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/popper.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/font-awesome.min.css" type="text/javascript"></script>
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/font-awesome.min.css" type="text/css">
    <style>
/* Style tab links */
.tablink {
    background-color: white;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: white;
}

/* Style the tab content (and add height:100% for full page content) */

.tabcontent {
    color: black;
    display: none;
    padding: 100px 20px;
    height: 100%;
}
a:hover{
  text-decoration: none;
}
a {
    color: black;
    text-decoration: none;
    font-size: 20px;
}

.tab-list {
    width: 1000px;
    height: auto;
    display: flex;
    flex-wrap: wrap;
}

.tab-link {
    width: 200px;
    height: auto;
    background-color: white;
}

.tab-link:hover {
    color: black;
    background-color: #ffffff;
}

.tab-content-list {
    width: 1000px;
    height: 200px;
    background-color: #ffffff;
    color: black;

}
.tab-content {
    width: 1000px;
    height: 200px;
    font-size: 40px;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto;
  grid-gap: 10px;
  background-color: white;
  padding: 10px;
}
.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
.item8 {
  grid-area: 1 / 2 / 5 / 6;
}
  </style>
  </head>
  <body>
  
  <!--<p>Ini script navbar</p> -->
    <nav class="navbar navbar-expand-lg navbar-white bg-white" style="font-size: 19px;">
    <div class="container">
       <img src="<?php echo base_url(); ?>images/logodaunbiru.jpg" alt="" height="65" width="200">
       <form class="form-inline my-2 my-lg-0">
        <nav id="cbp-hrmenu" class="cbp-hrmenu">

        <!--<p>Ini script mega menu</p> -->
          <ul>
            <li>
              <a href="#">Produk</a>
              <div style="opacity: 0.9; z-index: 1000;" class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                     <a href="<?php echo base_url();?>produk/monita"><h4>Monita</h4></a>
                    <ul>
                      <li><a href="<?php echo base_url();?>produk/monita1">Monita AMR (Automatic Meter Reading) </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita2">Monita Engine Protection</a></li>
                      <li><a href="<?php echo base_url();?>produk/monita2">Monita Marine (Vessel Monitoring System)</a></li>
                      <li><a href="<?php echo base_url();?>produk/monita2">Monita Tanker Monitoring System </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita2">Monita Pembangkit (Power Generator) </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita2">Monita Penyulang (Feeder)</a></li>
                    </ul>
                   </div>
                  <div>
                    <a href="<?php echo base_url();?>produk/haliza"><h4>Haliza</h4></a>
                    <ul>
                      <li><a href="<?php echo base_url();?>produk/haliza1">Haliza Reciprocating</a></li>
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

    <!--<p>Ini script search</p> -->
                <input class="mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
            </form>
    </div>
</nav>
<body>

<!--<p>Ini script tabs</p> -->
<div class="w3-row">
<button class="tablink" onclick="openPage('Tinjauan', this,)" id="defaultOpen">Tinjauan</button>
<button class="tablink" onclick="openPage('Spesifikasi', this,)">Spesifikasi</button>
<button class="tablink" onclick="openPage('Support', this,)">Support</button>
<div id="Tinjauan" class="tabcontent">
<div class="media">
<div class="grid-container">
  <p style="color: white;">.</p>
  <p style="color: white;">.</p>
  <p style="color: white;">.</p>                                                                                                          
  <p style="color: white;">.</p>
  <p style="color: white;">.</p>
  <p style="color: white;">.</p>
  <p style="color: white;">.</p>
  <div class="item8"><?php
$d = $this->db->query("Select*from gambar Where id=16")->row()->nama_file;
echo "<img width=400 height=300 src=\"" . base_url() . "images/$d\" />";
?></div>  
  <p style="color: white;">.</p>

  <div class="item10"><?php
$d = $this->db->query("Select*from gambar Where id=16")->row()->nama_file;
echo "<img width=50 height=70 src=\"" . base_url() . "images/$d\" />";
?></div>
  <div class="item11"><?php
$d = $this->db->query("Select*from gambar Where id=16")->row()->nama_file;
echo "<img width=50 height=70 src=\"" . base_url() . "images/$d\" />";
?></div>
  <div class="item12"><?php
$d = $this->db->query("Select*from gambar Where id=16")->row()->nama_file;
echo "<img width=50 height=70 src=\"" . base_url() . "images/$d\" />";
?></div>
  <div class="item13"><?php
$d = $this->db->query("Select*from gambar Where id=16")->row()->nama_file;
echo "<img width=50 height=70 src=\"" . base_url() . "images/$d\" />";
?></div>
  <div class="item14"><?php
$d = $this->db->query("Select*from gambar Where id=16")->row()->nama_file;  
echo "<img width=50 height=70 src=\"" . base_url() . "images/$d\" />";
?></div>
  <div class="item15"><?php
$d = $this->db->query("Select*from gambar Where id=16")->row()->nama_file;
echo "<img width=50 height=70 src=\"" . base_url() . "images/$d\" />";
?></div>
</div>

  

   <div class="col brief">
                      <div class="box title">
                          <h1>AC1900 Wireless Dual Band Gigabit Router 
                              <small id="product-model-name">
                                  Archer C9
                              </small>
                          </h1>
                      </div>
                      <div class="box highlights">
                            <ul>
  <li>Tessssssssssssssssssssssssssssssssssst</li>
  <p>ini lanjutan dari atas coba disatuin bisa ga disi le banyak kata maka dari itu saya nyatakan ini elahh berhasil isi oleh banyak kata yes alhamdulillah bisa ya teman teman</p>
  <li>Koneksi simultan antara 2.4GHz 600Mbps dan 5GHz 1300Mbps dengan total bandwidth yang tersedia sebesar 1.9Gbps</li>
  <p>ini adalah pengetesan agar terlihat bagaimana kalo ini diisi banyak kata mangga dilihat dengan saksama ya teman teman ya yu mari kita lihat dengan ini saya nyatakan ya aws aja kalo ada yang salah oe ya teman teman yu mar</p>
  <li>3 antenadual band yang dapat dilepas menyediakan cakupan nirkabel yang luas dan dapat dihandalkan</li>
  <p>mangga dicobian heula nya wkwkkwkwkwkwkwkwkkkwkw</p>
  <li>Teknologi beamforming memberikan koneksi nirkabel yang sangat efisien</li>
  <p>mari kita lihat apa yang akan terjadi setelah ini teman teman apa yang akan diperoleh dari yang sebelumnya semoga project ini selalu dimudahkan dan dilancarkan aamiin ya allah mangga dilihat apa hasilnya teman teman ini adalah apa yang kamu kumpukan selama ini</p>
  <li>Prosesor dual-core 1GHz memastikan tidak ada gangguan saat bersamaan dalam memproses beberapa tugas nirkabel atau kabel</li>
  <p>tessssssssssssssssssssssssssssssssssssssssssssst</p>
  <li>Port USB 3.0 + USB 2.0 berbagi printer lokal, file Media dengan perangkat jaringan atau jarak jauh melalui internet dengan mudah</l>
</ul>

<div class="container">
    <?php
    $d = $this->db->query("Select*from gambar Where id=20")->row()->nama_file;
    echo "<video controls=controls width=250 height=100 src=\"" . base_url() . "images/$d\" />
       <video>
       ;"
    ?>
     </div>
     <div class="col">
    <?php
    $d = $this->db->query("Select*from gambar Where id=19")->row()->nama_file;
    echo "<video controls=controls width=250 height=100 src=\"" . base_url() . "images/$d\" />
       <video>
       ;"
    ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<div id="Spesifikasi" class="tabcontent">
  
   <table class="table table-bordered">
      <tr>
        <td>Colour</td>
         <?php 
        $q = $this->db->select('haliza',array('id_produk' => 1));
        echo "<td>$q</td>";
        ?>
      </tr>
      <tr>
        <td>Resolution</td>
        <td> 800x600 pixel</td>
      </tr>
      <tr>
        <td>Antenna</td>
        <td>3*5dBi Fixed Omni Directional Antenna</td>
      </tr>
      <tr>
        <td>Button</td>
        <td>Reset ButtonWi-Fi/WPS ButtonPower On/Off Button</td>
      </tr>
      <tr>
        <td>Colour</td>
        <td>Yellow</td>
      </tr>
      <tr>
        <td>Resolution</td>
        <td> 800x600 pixel</td>
      </tr>
      <tr>
        <td>Antenna</td>
        <td>3*5dBi Fixed Omni Directional Antenna</td>
      </tr>
      <tr>
        <td>Button</td>
        <td>Reset ButtonWi-Fi/WPS ButtonPower On/Off Button</td>
      </tr>
  </table>
</div>
<div id="Support" class="tabcontent">
<div class="tab-list">
<div class="row">
<div class="container">
    <a href="#" onClick="openMedia('Software/Firmware')">
    <button type="button" class="btn btn-primary">Firmware</button>
    <a href="#" onClick="openMedia('Dokumen')">
    <button type="button" class="btn btn-primary">Dokumen</button>
<div class="tab-content-list">
    <div id="Software/Firmware" class="tab-content">
    <table class="table table-bordered">
      <tr>
        <td>Waktu Update : 2017-02-23</td>
        <td>Nama Software : <a href="<?php echo base_url()?>images/Brosur-Haliza-10.pdf" download>Manual_pemakaian_Haliza_2.pdf</td></a>
        <td>Versi : 12.32</td>
        <td>Keterangan : sudah ditambahkan ralat pada halaman 23</td>
      </tr>
  </table></div>
    <div id="Dokumen" class="tab-content">
    <table class="table table-bordered">
      <tr>
        <td>Waktu Update : 2017-02-23</td>
        <td>Dokumen : <a href="<?php echo base_url()?>images/Brosur-Haliza-10.pdf" download>Firmware_Monita_Sabang_12.32-spesial.bin</td></a>
        <td>Versi : 12.32</td>
        <td>Keterangan : sudah ditambahkan feature perbaikan memory dan pembacaan data</td>
      </tr>
  </table></div>
  </div>
  </div>
</div>
</div>
</div>
<script>
openMedia("tab1")
function openMedia(mediaName) {
    var i;
    var x = document.getElementsByClassName("tab-content");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    document.getElementById(mediaName).style.display = "block";
}
</script>

<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
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