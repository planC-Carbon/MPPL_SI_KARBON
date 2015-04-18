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
                <li id="active"><a href="http://localhost:81/CI/index.php/home/user">Data Anggota</a></li>
                <li><a href="http://localhost:81/CI/index.php/home/input_data">Hitung Carbon</a></li>
                <li><a href="http://localhost:81/CI/index.php/home/pohon">Data Pohon</a></li>
                <li><a href="http://siklus.lmb.its.ac.id/">Siklus ITS</a></li>
            </ul>
        </div>
        <select>
          <option id="jati">Jati</option>
          <option id="mahoni">Mahoni</option>
        </select>
        <label>Keliling</label>
        <input type="text" id="keliling" name="keliling">
  </div>
  </body>
</html>