<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $ktp                  = $_POST['KTP'];
  $nama_pemohon          = $_POST['Nama'];
  $tempatlahir            = $_POST['Tempat_Lahir'];
  $tanggallahir          = $_POST['tgl'];
  $pekerjaan            = $_POST['Pekerjaan'];
  $norek                = $_POST['No_Rek'];
  $alamat               = $_POST['Alamat'];
  $noproposal            = $_POST['No_Proposal'];
  $tanggalprpoposal      = $_POST['tglp'];
  $nominal             = $_POST['Nominal'];
  $teksnominal        = $_POST['Teks_Nominal'];
  $anggaran        = $_POST['Anggaran'];



  $query = "INSERT INTO t_pemohon (KTP, Nama, Tempat_Lahir, Tanggal_Lahir, Pekerjaan, No_Rek, Alamat, No_Proposal,
   Tgl_Proposal, Nominal, Teks_Nominal, Anggaran) VALUES ('$ktp', '$nama_pemohon', '$tempatlahir', '$tanggallahir', '$pekerjaan', '$norek', '$alamat', '$noproposal'
   , '$tanggalprpoposal', '$nominal', '$teksnominal', '$anggaran')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      echo "<script>alert('No KTP YANG DIMASUKKAN SUDAH ADA, MOHON PERIKSA KEMBALI.');window.location='tambah_pemohon.php';</script>";
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='pemohon.php';</script>";
                  }
?>
