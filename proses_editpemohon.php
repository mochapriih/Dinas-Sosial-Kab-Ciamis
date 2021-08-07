<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id             = $_POST['id'];
  $ktp            = $_POST['KTP'];
  $nama          = $_POST['Nama'];
  $tempat_lahir        = $_POST['Tempat_Lahir'];
  $tanggal_lahir       = $_POST['Tanggal_Lahir'];
  $pekerjaan        = $_POST['Pekerjaan'];
  $norek        = $_POST['No_Rek'];
  $alamat        = $_POST['Alamat'];
  $noproposal        = $_POST['No_Proposal'];
  $tgl_proposal        = $_POST['Tgl_Proposal'];
  $nominal        = $_POST['Nominal'];
  $teks_nominal        = $_POST['Teks_Nominal'];
  $anggaran        = $_POST['Anggaran'];



  $query  = "UPDATE t_pemohon SET KTP = '$ktp', Nama = '$nama', Tempat_Lahir = '$tempat_lahir', Tanggal_Lahir = '$tanggal_lahir', Pekerjaan = '$pekerjaan'
  , No_Rek = '$norek', Alamat = '$alamat', No_Proposal = '$noproposal', Tgl_Proposal = '$tgl_proposal', Nominal = '$nominal'
  , Teks_Nominal = '$teks_nominal', Anggaran = '$anggaran'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($koneksi, $query);
  // periska query apakah ada error
  if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                         " - ".mysqli_error($koneksi));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil diubah.');window.location='pemohon.php';</script>";
  }
?>
