<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM t_karangtaruna WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='karangtaruna.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='karangtaruna.php';</script>";
  }
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
          <h1>Print Data Karang Taruna</h1>
        <center>
        <form method="POST" action="proses_printkarangtaruna.php" enctype="multipart/form-data" >
        <section class="base">
          <input name="id" value="<?php echo $data['id']; ?>"  hidden />
          <div>
            <label>Nama Ketua Karang Taruna</label>
            <input type="text" name="Ketua" autofocus="" required=""  value="<?php echo $data['Ketua']; ?>" readonly/>
          </div>
          <div>
            <label>No Rekening</label>
           <input type="text" name="No_Rek" required=""  value="<?php echo $data['No_Rek']; ?>"readonly/>
          </div>
          <div>
            <label>Kantor Cabang Bank BJB</label>
           <input type="text" name="Cabang" required="" value="<?php echo $data['Cabang']; ?>"readonly/>
          </div>
          <div>
            <label>Nama Karang Taruna</label>
           <input type="text" name="Nama_Karang_Taruna" required="" value="<?php echo $data['Nama_Karang_Taruna']; ?>"readonly />
          </div>

          <div>
            <label>Alamat</label>
           <input type="text" name="Alamat" required="" value="<?php echo $data['Alamat']; ?>"readonly/>
          </div>
          <div>
            <label>Desa</label>
           <input type="text" name="Desa" required="" value="<?php echo $data['Desa']; ?>"readonly/>
          </div>
          <div>
            <label>Kecamatan</label>
           <input type="text" name="Kecamatan" required="" value="<?php echo $data['Kecamatan']; ?>"readonly />
          </div>
          <div>
            <label>No Proposal Pengajuan</label>
           <input type="text" name="No_Proposal_Pengajuan" required="" value="<?php echo $data['No_Proposal_Pengajuan']; ?>"readonly/>
          </div>

          <div>
            <label>Tanggal Proposal Pengajuan</label>
           <input type="date" name="Tgl_Proposal_Pengajuan" required="" value="<?php echo $data['Tgl_Proposal_Pengajuan']; ?>"readonly/>
          </div>
          <div>
            <label>No Proposal Pencairan</label>
           <input type="text" name="No_Proposal_Pencairan" required="" value="<?php echo $data['No_Proposal_Pencairan']; ?>"readonly/>
          </div>
          <div>
            <label>Tanggal Proposal Pencairan</label>
           <input type="date" name="Tgl_Proposal_Pencairan" required="" value="<?php echo $data['Tgl_Proposal_Pencairan']; ?>"readonly/>
          </div>
          <div>
            <label>Peruntukan Dana</label>
           <textarea type="text" name="Peruntukan_Dana" required=""readonly><?php echo $data['Peruntukan_Dana']; ?></textarea>
          </div>
          <div>
            <label>Nominal</label>
           <input type="text" name="Nominal" required="" value="<?php echo $data['Nominal']; ?>"readonly/>
          </div>
          <div>
            <label>Teks Nominal</label>
           <input type="text" name="Teks_Nominal" required="" value="<?php echo $data['Teks_Nominal']; ?>"readonly/>
          </div>
          <div>
            <label>Anggaran</label>
           <input type="text" name="Anggaran" required="" value="<?php echo $data['Anggaran']; ?>"readonly/>
          </div>
          <div>
           <button type="submit">Print Data Karang Taruna</button>
          </div>
          </section>
        </form>
    </body>
  </html>
