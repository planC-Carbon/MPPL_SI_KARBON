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
        <h2>Welcome !</h2><a href="http://localhost:81/CI/index.php/homea/index">Logout</a>
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


<?php echo validation_errors(); ?>
<?php echo form_open('home/karbon'); ?>

<table align="center">
  <caption text-align= "center"><h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspForm Input</h1>
<tr align="left">
<?php echo form_hidden('id_karbon',$fid_karbon['value']); ?></tr>
<?php echo "<td>". $tinggi_pohon		."</td><td>".' : '.form_input($ftinggi_pohon). "</td>"; ?><td>*Wajib diisi</td></tr>
  <tr align="left">
<?php echo "<td>". $diameter_pohon		."</td><td>".' : '. form_input($fdiameter_pohon). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr align="left">
<?php echo "<td>". $sudut		."</td><td>".' : '.form_input($fsudut). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr align="left">
<?php echo "<td>". $jarak_pengamat		."</td><td>".' : '.form_input($fjarak_pengamat). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr align="left">
<?php echo "<td>". $tinggi_pengamat		."</td><td>".' : '.form_input($ftinggi_pengamat). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr align="left">
<?php echo "<td>". $nama_pohon   ."</td><td>".' : '.form_dropdown('id_pohon',$isiID,set_value('id_pohon',$id_pohon)).br()."</td>"; ?><td>*Wajib diisi</td></tr>
  <!--tr align="left">
<td><label for="nama_pohon">Nama Pohon :</label>
    <select name="nama_pohon">
        <option value="mahoni">mahoni</option>
        <option value="jati">jati</option>
        <option value="sengon">sengon</option>
        <option value="puspa">puspa</option>
        <option value="karet">karet</option>
        <option value="akasia">akasia</option>
        <option value="lain">Pohon Lain</option>
      </select>
     <br/></td></tr-->
     <tr align="left">
<td><label for="letak_pohon">Letak Pohon :</label>
    <select name="letak_pohon">
        <option value="1">Zona 1</option>
        <option value="2">Zona 2</option>
        <option value="3">Zona 3</option>
        <option value="4">Zona 4</option>
      </select>
     <br/></td></tr>
<?php echo "<td></td><td>". form_submit('mysubmit','Submit!'). "</td>";  ?></tr></table>
<!--?php foreach ($query->result_array() as $entry)
{
   echo $entry['hasil_perhitungan'];
} ?-->
  </div>
</body>
</html>