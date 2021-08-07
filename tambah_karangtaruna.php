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
        <h1>Tambah Data Karang Taruna</h1>
      <center>
      <form method="POST" action="proses_tambahkarangtaruna.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Ketua Karang Taruna</label>
          <input type="text" name="Ketua" autofocus="" required=""  />
        </div>
        <div>
          <label>No Rekening</label>
         <input type="text" name="No_Rek" required="" />
        </div>
        <div>
          <label>Kantor Cabang Bank BJB</label>
         <input type="text" name="Cabang" required="" />
        </div>
        <div>
          <label>Nama Karang Taruna</label>
         <input type="text" name="Nama_Karang_Taruna" required="" />
        </div>

        <div>
          <label>Alamat</label>
          <textarea rows="4" name="Alamat" required=""></textarea>
        </div>
        <div>
          <label>Desa</label>
         <input type="text" name="Desa" required="" />
        </div>
        <div>
          <label>Kecamatan</label>
         <input type="text" name="Kecamatan" required="" />
        </div>
        <div>
          <label>No Proposal Pengajuan</label>
         <input type="text" name="No_Proposal_Pengajuan" required="" />
        </div>

        <div>
          <label>Tanggal Proposal Pengajuan</label>
         <input type="date" name="Tgl_Proposal_Pengajuan" required="" />
        </div>
        <div>
          <label>No Proposal Pencairan</label>
         <input type="text" name="No_Proposal_Pencairan" required="" />
        </div>
        <div>
          <label>Tanggal Proposal Pencairan</label>
         <input type="date" name="Tgl_Proposal_Pencairan" required="" />
        </div>
        <div>
          <label>Peruntukan Dana</label>
         <textarea rows="4"type="text" name="Peruntukan_Dana" required=""></textarea>
        </div>
        <div>
          <label>Nominal</label>
         <input type="text" name="Nominal" required=""  />
        </div>
        <div>
          <label>Teks Nominal</label>
         <input type="text" name="Teks_Nominal" required=""  placeholder="Ketikkan nominal berupa text cth(SEPULUH JUTA RUPIAH)" />
        </div>
        <div>
          <label>Anggaran</label>
         <input type="text" name="Anggaran" required=""  placeholder="Tahun Anggaran" />
        </div>
        <div>
         <button type="submit">Simpan Data Karang Taruna</button>
        </div>
        </section>
      </form>
  </body>
</html>
