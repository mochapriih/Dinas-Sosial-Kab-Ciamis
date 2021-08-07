<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM t_pemohon WHERE id='$id'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='pemohon.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='pemohon.php';</script>";
  }
  $date = date('d-m-Y');
  $tahun = date('Y');





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
          <h1>Print Data Pemohon</h1>
        <center>
        <form method="POST" action="proses_print.php" enctype="multipart/form-data" >
        <section class="base">
          <!-- menampung nilai id produk yang akan di edit -->
          <input name="id" value="<?php echo $data['id']; ?>"  hidden />
          <div>
            <label>KTP</label>
            <input type="text" name="KTP" value="<?php echo $data['KTP']; ?>" readonly/>
          </div>
          <div>
            <label>Nama</label>
           <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>" readonly/>
          </div>
          <div>
            <label>Tempat Lahir</label>
           <input type="text" name="Tempat_Lahir" required=""value="<?php echo $data['Tempat_Lahir']; ?>" readonly/>
          </div>
          <div>
            <label>Tanggal Lahir</label>
           <input type="date" name="Tanggal_Lahir" required=""value="<?php echo $data['Tanggal_Lahir'];?>" readonly/>
          </div>
          <div>
            <label>Pekerjaan</label>
           <input type="text" name="Pekerjaan" required=""value="<?php echo $data['Pekerjaan']; ?>" readonly/>
          </div>
          <div>
            <label>No Rekening</label>
           <input type="text" name="No_Rek" required=""value="<?php echo $data['No_Rek']; ?>" readonly/>
          </div>
          <div>
            <label>Alamat</label>
           <textarea rows="3" name="Alamat" readonly><?php echo $data['Alamat'] ?></textarea>
          </div>
          <div>
            <label>No Proposal</label>
           <input type="text" name="No_Proposal" required=""value="<?php echo $data['No_Proposal']; ?>" readonly/>
          </div>
          <div>
            <label>Tanggal Proposal</label>
           <input type="date" name="Tgl_Proposal" required=""value="<?php echo $data['Tgl_Proposal']; ?>" readonly/>
          </div>
          <div>
            <label>Nominal</label>
           <input type="text" name="Nominal" required=""value="<?php echo $data['Nominal']; ?>" readonly/>
          </div>
          <div>
            <label>Teks Nominal</label>
           <input type="text" name="Teks_Nominal" required=""value="<?php echo $data['Teks_Nominal']; ?>" readonly/>
          </div>

          <div>
           <input type="hidden" name="TGLBLNTHN_SKRG" required=""value="<?php echo $date; ?>" readonly/>
          </div>
          <div>
           <input type="hidden" name="THN_SKRG" required=""value="<?php echo $tahun; ?>" readonly/>
          </div>





          <div>
           <button type="submit">Print Data Pemohon</button>
          </div>
          </section>
        </form>
    </body>
  </html>
