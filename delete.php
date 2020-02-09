
<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
// $nip = $_GET['nip'];

// // query SQL untuk insert data
// $query="DELETE from karyawan where nip='$nip'";
// mysqli_query($con, $query);
// // mengalihkan ke halaman index.php
// header("location:karyawan.php");
// 

  // cek apakah ada parameter ID dikirim
  if (isset($_GET['data'])) {
    // jika ada, ambil nilai id
    $id     = $_GET['data'];
    echo $id;
    // query SQL menghapus data berdasarkan id yg dipilih
    $sql    = "DELETE from karyawan WHERE nip='".$id."'";
    // hapus data pada database
    $query  = mysqli_query($con,$sql);
    // cek apakah proses hapus data berhasil
    if(mysqli_affected_rows($con)) {
      // jika berhasil, redirect kehalaman index.php
      
        ?>
        <script language="JavaScript">
        alert('Data Karyawan Berhasil dihapus');
        document.location = 'karyawan.php';
        </script>
        <?php
    }
   } else {
      // jika tidak redirect juga kehalaman index.php
      header("Location:karyawan.php");
    }
  
 ?>