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
<title>Kebun Binatang Surabaya - Home</title>
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
        <h1><a href="">Kebun Binatang <span>Surabaya</span></a></h1>
        <div align="right">
        <h2>Welcome <?php echo $username; ?>!
        </h2><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/homea/index">Logout</a>
        </div>
        <div id="navcontainer">
            <ul id="navlist">
                <li><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/home/index">Home</a></li>
                <li ><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/home/event">Event</a></li>
                <li><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/home/gallery">Gallery</a></li>
                <li id="active"><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/home/fantasi">Fantasi</a></li>
                <li><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/home/contact">Contact</a></li>
                <li><a href="http://10.151.34.9/fpsavekbs/CodeIgniter/index.php/home/ticket">Buy Ticket</a></li>
            </ul>
        </div>
        <div class="clearfloat"></div>
    </div>
</header>

<div class="container">
    <section>
        <!-- begin .boxes -->
        <div class="clearfloat"></div>
        <div class="boxes">
			<ul>
            	<li>
                	<img src="../../images/boxPic1.jpg" alt=""><h2><?=$query1['nama_fantasi']?></h2>
                    <p>
                    <br>
                    Hari : <?=$query1['hari_fantasi']?>
                    <br>Jam : <?=$query1['jam_fantasi']?>
                    <br>Tarif : <?=$query1['tarif_fantasi']?>
                    <br>Fasilitas : <?=$query1['deskripsi_fantasi']?>
                    </p>
                    <br>
                    <h1></h1><h1></h1><h1></h1>
                </li>
                <li>
                	<img src="../../images/boxPic2.jpg" alt=""><h2><?=$query2['nama_fantasi']?></h2>
                    <p>
                    <br>
                    Hari : <?=$query2['hari_fantasi']?>
                    <br>Jam : <?=$query2['jam_fantasi']?>
                    <br>Tarif : <?=$query2['tarif_fantasi']?>
                    <br>Fasilitas : <?=$query2['deskripsi_fantasi']?>
                    </p>
                    <br><br><br><h1></h1>
                </li>
                <li>
                	<img src="../../images/boxPic3.jpg" alt=""><h2><?=$query3['nama_fantasi']?></h2>
                    <p>
                    <br>
                    Hari : <?=$query3['hari_fantasi']?>
                    <br>Jam : <?=$query3['jam_fantasi']?>
                    <br>Tarif : <?=$query3['tarif_fantasi']?>
                    <br>Fasilitas : <?=$query3['deskripsi_fantasi']?>
                    </p>
                    <br>
                </li>
                <li>
                	<img src="../../images/boxPic4.jpg" alt=""><h2><?=$query4['nama_fantasi']?></h2>
                    <p>
                    <br>
                    Hari : <?=$query4['hari_fantasi']?>
                    <br>Jam : <?=$query4['jam_fantasi']?>
                    <br>Tarif : <?=$query4['tarif_fantasi']?>
                    <br>Fasilitas : <?=$query4['deskripsi_fantasi']?>
                    </p>
                    <br><br><br><h1></h1>
                </li>
            </ul>
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
