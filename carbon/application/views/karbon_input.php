<html>
<head>
<link rel="stylesheet" type="text/css" href="../../styles.css">
<title>Perhitungan Karbon</title>
<link rel="icon" type="image/jpg" href="../../images/siklus.jpg">
</head>
<body background="../../images/siteBackground.jpg">

<div class="container-narrow">
<div class="well" align="center">
<?php echo validation_errors(); ?>
<?php echo form_open('karbon/input'); ?>

<table align="center">
<tr align="center"><td colspan="3">Form Input</td></tr>
  <tr align="left">
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
<td><label for="nama_pohon">Nama Pohon :</label>
    <select name="nama_pohon">
        <option value="mangga">Mangga</option>
      </select>
     <br/></td></tr>
     <tr align="left">
<td><label for="letak_pohon">Letak Pohon :</label>
    <select name="letak_pohon">
        <option value="TC">Teknik Informatika ITS</option>
      </select>
     <br/></td></tr>
<?php echo "<td></td><td>". form_submit('mysubmit','Submit!'). "</td>";  ?></tr></table>
</div>
</div>


</body>
</html>