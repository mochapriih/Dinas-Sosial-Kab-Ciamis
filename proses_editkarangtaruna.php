<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id                 = $_POST['id'];
  $nama                  = $_POST['Ketua'];
  $norek                 = $_POST['No_Rek'];
  $cabang                = $_POST['Cabang'];
  $namakarangtaruna      = $_POST['Nama_Karang_Taruna'];
  $alamat                = $_POST['Alamat'];
  $desa                  = $_POST['Desa'];
  $kecamatan             = $_POST['Kecamatan'];
  $noproposalpengajuan            = $_POST['No_Proposal_Pengajuan'];
  $tanggalprpoposalpengajuan      = $_POST['Tgl_Proposal_Pengajuan'];
  $noproposalpencairan            = $_POST['No_Proposal_Pencairan'];
  $tanggalproposalpencairan       = $_POST['Tgl_Proposal_Pencairan'];
  $peruntukandana                 = $_POST['Peruntukan_Dana'];
  $nominal                        = $_POST['Nominal'];
  $teksnominal                    = $_POST['Teks_Nominal'];
  $anggaran                    = $_POST['Anggaran'];



  $query = "UPDATE t_karangtaruna SET Ketua = '$nama', No_Rek = '$norek', Cabang = '$cabang', Nama_Karang_Taruna = '$namakarangtaruna', Alamat = '$alamat', Desa = '$desa',
  Kecamatan = '$kecamatan', No_Proposal_Pengajuan = '$noproposalpengajuan', Tgl_Proposal_Pengajuan = '$tanggalprpoposalpengajuan', No_Proposal_Pencairan = '$noproposalpencairan',
  Tgl_Proposal_Pencairan = '$tanggalproposalpencairan', Peruntukan_Dana = '$peruntukandana', Nominal = '$nominal', Teks_Nominal = '$teksnominal', Anggaran = '$anggaran'";

  $query .= "WHERE id = '$id'";
  $result = mysqli_query($koneksi, $query);
  // periska query apakah ada error
  if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                         " - ".mysqli_error($koneksi));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil diubah.');window.location='karangtaruna.php';</script>";
  }
?>
