<?php

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
  $tanggalprpoposalpengajuan = date("d-m-Y",strtotime($tanggalprpoposalpengajuan));

  $noproposalpencairan             = $_POST['No_Proposal_Pencairan'];

  $tanggalproposalpencairan        = $_POST['Tgl_Proposal_Pencairan'];
  $tanggalproposalpencairan = date("d-m-Y",strtotime($tanggalproposalpencairan));

  $peruntukandana                = $_POST['Peruntukan_Dana'];
  $nominal                = $_POST['Nominal'];
  $teksnominal                = $_POST['Teks_Nominal'];

  // memanggil dan membaca template dokumen yang telah kita buat
  $document = file_get_contents("KARANGTARUNA.rtf");
  // isi dokumen dinyatakan dalam bentuk string

  $document = str_replace("#NAMAKETUA", strtoupper($nama), $document);
  $document = str_replace("#NOREKENING", $norek, $document);
  $document = str_replace("#CABANGBANK", $cabang, $document);
  $document = str_replace("#NAMAKTARUNAJUDUL", strtoupper($namakarangtaruna), $document);
  $document = str_replace("#NAMAKTARUNA", $namakarangtaruna, $document);
  $document = str_replace("#ALAMAT", $alamat, $document);
  $document = str_replace("#NAMADESAJUDUL", strtoupper($desa), $document);
  $document = str_replace("#NAMADESA", $desa, $document);
  $document = str_replace("#NAMAKECAMATANJUDUL", strtoupper($kecamatan), $document);
  $document = str_replace("#NAMAKECAMATAN", $kecamatan, $document);
  $document = str_replace("#NOPROPOSALPENGAJUAN", $noproposalpengajuan, $document);
  $document = str_replace("#TANGGALPENGAJUAN", $tanggalprpoposalpengajuan, $document);
  $document = str_replace("#NOPROPOSALPENCAIRAN", $noproposalpencairan, $document);
  $document = str_replace("#TANGGALPENCAIRAN", $tanggalproposalpencairan, $document);
  $document = str_replace("#PERUNTUKKANDANA", $peruntukandana, $document);
  $document = str_replace("#NOMINAL", $nominal, $document);
  $document = str_replace("#TEKSNOMINAL", $teksnominal, $document);


  // header untuk membuka file output RTF dengan MS. Word
  header("Content-type: application/msword");
  header("Content-disposition: inline; filename=SuratKarangTaruna.doc");
  header("Content-length: ".strlen($document));
  echo $document;
?>
