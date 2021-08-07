<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<html>
  <head>
    <title>Data Karang Taruna</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 95%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: center;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }

    .bos {
      background-color: salmon;
      color: #fff;
      padding: 10px;
      text-decoration: none;
      font-size: 12px;
    }
    .cari {
      background-color: salmon;
      color: #fff;
      padding: 3px;
      text-decoration: none;
      font-size: 12px;
    }
    </style>
    <script>
  /*    function exportTableToExcel(tableID, filename = ''){
      var downloadLink;
      var dataType = 'application/vnd.ms-excel';
      var tableSelect = document.getElementById(tableID);
      var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

      // Specify file name
      filename = filename?filename+'.xls':'excel_data.xls';

      // Create download link element
      downloadLink = document.createElement("a");

      document.body.appendChild(downloadLink);

      if(navigator.msSaveOrOpenBlob){
          var blob = new Blob(['\ufeff', tableHTML], {
              type: dataType
          });
          navigator.msSaveOrOpenBlob( blob, filename);
      }else{
          // Create a link to the file
          downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

          // Setting the file name
          downloadLink.download = filename;

          //triggering the function
          downloadLink.click();
        }
      }*/
      function downloadCSV(csv, filename = '') {
        var csvFile;
        var downloadLink;

        filename = filename?filename+'.csv':'excel_data.csv';

        csvFile = new Blob([csv], {type: "text/csv"});

        downloadLink = document.createElement("a");

        downloadLink.download = filename;

        downloadLink.href =window.URL.createObjectURL(csvFile);

        downloadLink.style.display = "none";

        document.body.appendChild(downloadLink);

        downloadLink.click();
      }

      function exportTableToCSV(filename) {
        var csv = [];
        var rows = document.querySelectorAll("table tr");

        for (var i = 0; i< rows.length; i++) {
          var row = [], cols = rows[i].querySelectorAll("td, th");

          for (var j= 0; j < cols.length; j++)
          row.push(cols[j].innerText);

          csv.push(row.join(","));
        }

        downloadCSV(csv.join("\n")), filename;
      }
    </script>
  </head>
  <body>
    <center><h1>Data Karang Taruna</h1><center>
    <center><a class="bos" href="index.php">HOME</a><center>
      <br>
      <br>

    <center><a class="bos" href="tambah_karangtaruna.php">+ &nbsp; Tambah Data Karang Taruna</a><center>
    <br>
    <br>
    <center><a class="bos" href="karangtaruna.php">Tampilkan Semua Data</a><center>
    <br>
    <form method="GET" action="karangtaruna.php" enctype="multipart/form-data" >
  <div>
    <label></label>
   <input type="text" name="cari" />
   <button type="submit" class="cari" value="cari">Cari Data</button>
  </div>
  <br>
          <button onclick="exportTableToCSV('table_wrapper')">Export To Excel</button>
</form>
    <table id='table_wrapper'>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Karang Taruna</th>
          <th>Alamat</th>
          <th>Nominal</th>
          <th>No Rekening</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $query = "SELECT * FROM t_karangtaruna WHERE Nama_Karang_Taruna LIKE '%".$cari."%' or  Ketua LIKE '%".$cari."%'
  or No_Proposal_Pengajuan LIKE '".$cari."' or No_Proposal_Pencairan LIKE '".$cari."' or Anggaran LIKE '".$cari."' ORDER BY id ASC";
  $result = mysqli_query($koneksi, $query);
 }else{
      $query = "SELECT * FROM t_karangtaruna ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);}
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>

          <td><?php echo $row['Nama_Karang_Taruna']; ?></td>
          <td><?php echo $row['Alamat']; ?></td>
          <td><?php echo $row['Nominal']; ?></td>
          <td><?php echo $row['No_Rek']; ?></td>
          <td>
              <a href="edit_karangtaruna.php?id=<?php echo $row['id']; ?>">Edit</a>
              <a href="proses_hapuskarangtaruna.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
              <a href="print_karangtaruna.php?id=<?php echo $row['id']; ?>">Print</a>
          </td>
      </tr>

      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>
