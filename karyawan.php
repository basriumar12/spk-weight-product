<!DOCTYPE html>

<html xmlns="" xml:lang="en" lang="en-AU">

<head>

  <title>Seleksi Karyawan Terbaik</title>

  <link rel="stylesheet" type="text/css" href="css/screen_yellow.css" media="screen, tv, projection" />

</head>

<body>

<!-- Main site container -->
<div id="siteBox">

  <!-- Main site header : holds the img, title and top tabbed menu -->
  <div id="header">

    <!-- top rounded corner -->
    <img src="images/corner_tl.gif" alt="corner" style="float:left;" />


    <!-- Site title and subTitle -->
    <span class="title">
      <span class="white">ELANG SURYA | </span>SISTEM PENUNJANG KEPUTUSAN
      <span class="subTitle">
        SPK
      </span>
    </span>

   
  </div>

  <!-- Content begins -->
  <div id="content">

    <!-- Left side menu : side bar links/news/search/etc. -->
    <div id="contentLeft">

      <p>
        <span class="header">Data Karyawan</span>
      </p>

      <p>
        <a href="index.php" title="different colour scheme" class="menuItem">Home</a>
        <a href="input_karyawan.php" title="whole wack of art" class="menuItem">Input Karyawan</a>
        <a href="karyawan.php" title="design work" class="menuItem">Lihat Karyawan</a>
      </p>

      <p>
        <span class="header">SPK</span>
      </p>
      <p>
        <a href="kriteria_tambah.php" title="different colour scheme" class="menuItem">Inpt Nilai Kriteria</a>
        <a href="kriteria.php" title="different colour scheme" class="menuItem">Kriteria</a>
        <a href="hasil.php" title="different colour scheme" class="menuItem">Hasil</a>
      </p>

      <!-- Creates the rounded corner on the bottom of the left menu -->
      <div class="bottomCorner">
        <img src="images/corner_sub_br.gif" alt="bottom corner" class="vBottom"/>
      </div>

    </div>


    <!-- Right side main content -->
    <div id="contentRight">

      <p>
        <span class="header">Tabel Karyawan</span>
      </p>     
  <center>      

   <table border="1" width="50%">
   <thead>   
       <tr>
          <th>No</th>
          <th>NIP</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Action</th>
       </tr>
  </thead>
       <tbody>

       <?php 
// mysql_connect("localhost","root","");
// mysql_select_db("karyawan_wp");
include'koneksi.php';
$nomor = 0;
$tampil = mysqli_query($con,"select * from karyawan");
 while ($data = mysqli_fetch_array($tampil)) {
   ?>
       <tr>
       <td><?php echo $nomor=$nomor+1; ?></td>
         <td><?php echo $data['nip']; ?></td>
         <td><?php echo $data['nama']; ?></td>
         <td><?php echo $data['jk']; ?></td>
         <td><?php echo $data['alamat']; ?></td>
         
         <!-- href = 'hapus.php?id=' + id; -->
         <td><?php echo "<a href=delete.php?data=$data[nip]>delete</a>" ?></td>


       </tr>
 <?php } ?>
 
       </tbody>
   </table>
 </center>
      <p>
        <span class="header"></span>        
      </p>
      <!-- Creates bottom left rounded corner -->
      <img src="images/corner_sub_bl.gif" alt="bottom corner" class="vBottom"/>

    </div>

  </div>

  <!-- Footer begins -->
  <div id="footer">

    <div id="footerLeft">
     
   </div>

    <div id="footerRight">
      &nbsp;
    </div>

  </div>

</div>

</body>

</html>