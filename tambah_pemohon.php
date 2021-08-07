<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include



?>
<!DOCTYPE html>
<html>
  <head>
    <title>DINAS SOSIAL</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    textarea {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    select {
      padding: 6px;
      width: 30%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Data Pemohon</h1>
      <center>
      <form method="POST" action="proses_tambahpemohon.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>KTP</label>
          <input type="text" name="KTP" autofocus="" pattern=".{16,}" required title="No KTP Harus 16 Angka" required="" maxlength="16" />

        </div>
        <div>
          <label>Nama Pemohon</label>
         <input type="text" name="Nama" required="" />
        </div>
        <div>
          <label>Tempat Lahir</label>
         <input type="text" name="Tempat_Lahir" required="" />
        </div>
        <div>
          <label>Tanggal Lahir</label>
          <input type="date" name="tgl" required="" />
        </div>
        <div>
          <label>Pekerjaan</label>
         <input type="text" name="Pekerjaan" required="" />
        </div>
        <div>
          <label>No Rekening</label>
         <input type="text" name="No_Rek" required="" placeholder="WAJIB BANK BJB" />
        </div>
        <div>
          <label>Alamat</label>
         <textarea cols="55" rows="4" name="Alamat" required=""></textarea>
        </div>
        <div>
          <label>No Proposal</label>
         <input type="text" name="No_Proposal" required="" />
        </div>
        <div>
          <label>Tanggal Proposal Diajukan</label>
          <input type="date" name="tglp" required="" />
        </div>
        <div>
          <label>Nominal</label>
         <input type="text" name="Nominal" required="" />
        </div>
        <div>
          <label>Teks Nominal</label>
         <input type="text" name="Teks_Nominal" required="" placeholder="Ketikkan nominal berupa text cth(SEPULUH JUTA RUPIAH)" />
        </div>
        <div>
          <label>Anggaran</label>
         <input type="text" name="Anggaran" required="" placeholder="Tahun Anggaran" />
        </div>





        <div>
         <button type="submit">Simpan Data Pemohon</button>
        </div>
        </section>
      </form>
  </body>
</html>
