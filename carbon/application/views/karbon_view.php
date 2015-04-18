<!-- File products_view.php -->
<!DOCTYPE HTML>
<!--
Design by Free Responsive Templates
http://www.free-responsive-templates.com
Released for free under a Creative Commons Attribution 3.0 Unported License (CC BY 3.0) 
-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C-Carbon - Home</title>

<link rel="icon" type="image/jpg" href="../../images/siklus.jpg">
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../../styles.css">
<script src="../../js/jquery-1.7.1.min.js"></script>
<script src="../../js/jquery.flexslider-min.js"></script>
</head>
<body background="../../images/siteBackground.jpg">
<header background="../../images/headerTop.png">
  <div class="headerContainer">
    <h1><a href="">C- <span>Carbon</span></a></h1>
      <div align="right">
        <h2>Welcome <?php echo $username; ?>!</h2><a href="http://localhost:81/CI/index.php/homea/index">Logout</a>
      </div>
        <div id="navcontainer">
            <ul id="navlist">
                <li><a href="http://localhost:81/CI/index.php/home/index">Home</a></li>
                <li ><a href="http://localhost:81/CI/index.php/home/user">Data Anggota</a></li>
                <li id="active"><a href="http://localhost:81/CI/index.php/home/karbon">Hitung Carbon</a></li>
                <li><a href="http://localhost:81/CI/index.php/home/pohon">Data Pohon</a></li>
                <li><a href="http://siklus.lmb.its.ac.id/">Siklus ITS</a></li>
            </ul>
        </div>
        
   <?php 
      $jumlahKarbon = $listKarbon->num_rows(); //$listProduct berasal dari data yang dilempar dari controller, yaitu $data['listProducts']. num_rows() digunakan untuk menghitung jumlah baris yang dimiliki ketika kita melakukan select dari database
    ?>
     
    <?php
            if($jumlahKarbon > 0){ //Apabila data produk yang ada di dalam database lebih dari 0 maka baru ditampilkan
    ?>
      <!-- Kalau ada datanya, maka kita akan tampilkan dalam table -->
      <table border="1" >
        <caption text-align= "center"><h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspList Karbon<br><br></h1></caption>

        <thead>

          <tr>
            <th>ID Karbon</th>
            <th>Tinggi Pohon</th>
            <th>Diameter Pohon</th>
            <th>Sudut</th>
            <th>Jarak Pengamat</th>
            <th>Tinggi Pengamat</th>
            <th>ID Pohon</th>
            <th>Berat Jenis</th>
            <th>Hasil</th>
          </tr>
        </thead>
        <tbody>
          <?php
            //Kita akan melakukan looping sesuai dengan data yang dimiliki
            $i = 0; //nantinya akan digunakan untuk pengisian Nomor
            foreach ($listKarbon->result() as $row) {
          ?>
          <tr>
            <td><?= $row->id_karbon ?></td> <!-- karena berbentuk objek, maka kita menggunakan panah (->) untuk menunjuk field yang ada di database -->
            <td><?= $row->tinggi_pohon ?></td>
            <td><?= $row->diameter_pohon ?></td>  
            <td><?= $row->sudut ?></td> 
            <td><?= $row->jarak_pengamat ?></td>
            <td><?= $row->tinggi_pengamat ?></td>
            <td><?= $row->id_pohon ?></td>
            <td><?= $row->berat_jenis ?></td>
            <td><?= $row->hasil ?></td>       
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
    <?php
      }
    ?>
  </div>
  </body>
</html>