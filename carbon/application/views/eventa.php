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
<title>Kebun Binatang Surabaya - Event</title>
<link rel="icon" type="image/png" href="../../images/saveKBS.png">
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../../styles.css">
<script src="../../js/jquery-1.7.1.min.js"></script>
<script src="../../js/jquery.flexslider-min.js"></script>
</head>
<body background="../../images/siteBackground.jpg">
<header background="../../images/headerTop.png">
    <div class="headerContainer">
        <h1><a href="#">Kebun Binatang <span>Surabaya</span></a></h1>
        <div id="login" align="right">
        <a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/registrasi/input">register</a>
        <a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/login">login</a>
        </div>
        <div id="navcontainer">
            <ul id="navlist">
                <li><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/homea/index">Home</a></li>
                <li id="active"><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/homea/eventa">Event</a></li>
                <li><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/homea/gallerya">Gallery</a></li>
                <li><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/homea/fantasia">Fantasi</a></li>
                <li><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/homea/contacta">Contact</a></li>
            </ul>
        </div>
        <div class="clearfloat"></div>
    </div>
</header>

<div class="container">
    <section>
        <h1></h1>
        <!-- begin .boxes -->
        <div class="clearfloat"></div>
        <div class="boxes">
                	<center><img src="../../images/kbsmenyala.jpg" alt="">
                    <h1></h1>
                    <table>
                    <?php 
foreach($query as $col){
  echo "<tr><td colspan=3><h2>". $col->NAMA_EVENT ."</h2></td></tr>";
  echo "<tr><td colspan=3>". $col->DESKRIPSI ."</td></tr>";
  echo "<tr><td>Tanggal</td><td> : ". $col->WAKTU_EVENT ."</td></tr>";
  echo "<tr><td>Pelaksana</td><td> : ". $col->CP ."</td></tr>";
  
}
?>
  </table></center>               
            <div class="clearfloat"></div>
        </div>
        <!-- end .boxes -->
    </section>
</div>

    <div class="footerBottom"></div>
    <div class="clearfloat"></div>
    <div class="copyright">
        <p>
            Copyright &copy; Kelompok SaveKBS. Designed by <a href="http://www.free-responsive-templates.com" title="free responsive templates">Free Responsive Templates</a>, Validation 
            <a class="footerLink" href="http://validator.w3.org/check/referer" title="This page validates as HTML5"><abbr title="HyperText Markup Language">HTML5</abbr></a> | 
            <a class="footerLink" href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS3</abbr></a>
        </p>
</footer>
</body>
</html>
