<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nama                  = $_POST['Ketua'];
  $norek          = $_POST['No_Rek'];
  $cabang            = $_POST['Cabang'];
  $namakarangtaruna          = $_POST['Nama_Karang_Taruna'];
  $alamat            = $_POST['Alamat'];
  $desa                = $_POST['Desa'];
  $kecamatan               = $_POST['Kecamatan'];
  $noproposalpengajuan            = $_POST['No_Proposal_Pengajuan'];
  $tanggalprpoposalpengajuan      = $_POST['Tgl_Proposal_Pengajuan'];
  $noproposalpencairan             = $_POST['No_Proposal_Pencairan'];
  $tanggalproposalpencairan        = $_POST['Tgl_Proposal_Pencairan'];
  $peruntukandana                = $_POST['Peruntukan_Dana'];
  $nominal                = $_POST['Nominal'];
  $teksnominal                = $_POST['Teks_Nominal'];
  $anggaran                    = $_POST['Anggaran'];



  $query = "INSERT INTO t_karangtaruna (Ketua, No_Rek, Cabang, Nama_Karang_Taruna, Alamat, Desa, Kecamatan, No_Proposal_Pengajuan, Tgl_Proposal_Pengajuan,
  No_Proposal_Pencairan, Tgl_Proposal_Pencairan, Peruntukan_Dana, Nominal, Teks_Nominal, Anggaran) VALUES ('$nama', '$norek', '$cabang', '$namakarangtaruna', '$alamat', '$desa',
    '$kecamatan', '$noproposalpengajuan', '$tanggalprpoposalpengajuan', '$noproposalpencairan', '$tanggalproposalpencairan', '$peruntukandana', '$nominal', '$teksnominal', '$anggaran')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      echo "<script>alert('No KTP YANG DIMASUKKAN SUDAH ADA, MOHON PERIKSA KEMBALI.');window.location='tambah_karangtaruna.php';</script>";
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='karangtaruna.php';</script>";
                  }
?>
