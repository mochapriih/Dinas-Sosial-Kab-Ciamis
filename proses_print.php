<?php
// membaca data dari form


$id                 = $_POST['id'];
$ktp               = $_POST['KTP'];
$nama              = $_POST['Nama'];
$tempat_lahir      = $_POST['Tempat_Lahir'];

$tanggal_lahir     = $_POST['Tanggal_Lahir'];
$tanggal_lahir = date("d-m-Y",strtotime($tanggal_lahir));


$pekerjaan        = $_POST['Pekerjaan'];
$norek             = $_POST['No_Rek'];
$alamat            = $_POST['Alamat'];
$noproposal        = $_POST['No_Proposal'];

$tgl_proposal       = $_POST['Tgl_Proposal'];
$tgl_proposal = date("d-m-Y",strtotime($tgl_proposal));

$nominal        = $_POST['Nominal'];
$teks_nominal        = $_POST['Teks_Nominal'];
$date               = $_POST['TGLBLNTHN_SKRG'];
$tahun               = $_POST['THN_SKRG'];

// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("SURAT.rtf");
// isi dokumen dinyatakan dalam bentuk string

$document = str_replace("#NOMINAL", $nominal, $document);
$document = str_replace("#TEKSNOMINAL", $teks_nominal, $document);
$document = str_replace("#NAMAPEMOHON", $nama, $document);
$document = str_replace("#TMPLAHIR", $tempat_lahir, $document);
$document = str_replace("#TTL", $tanggal_lahir, $document);
$document = str_replace("#ALAMATPEMOHON", $alamat, $document);
$document = str_replace("#KTPPEMOHON", $ktp, $document);
$document = str_replace("#PEKERJAANPEMOHON", $pekerjaan, $document);
$document = str_replace("#NOREKPEMOHON", $norek, $document);
$document = str_replace("#TGLBLNTHN_SKRG", $date, $document);
$document = str_replace("#THN_SKRG", $tahun, $document);
$document = str_replace("#NOPROPOSALPEMOHON", $noproposal, $document);
$document = str_replace("#TGLBLNTHNPENGAJUANPROPOSAL", $tgl_proposal, $document);



// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=suratpemohon.doc");
header("Content-length: ".strlen($document));
echo $document;
?>
