<html>
<head>
<link rel="stylesheet" type="text/css" href="../../styles.css">
<title>Input Pohon</title>
<link rel="icon" type="image/jpg" href="../../images/siklus.jpg">
</head>
<body background="../../images/siteBackground.jpg">

<div class="container-narrow">
<div class="well" align="center">
<?php echo validation_errors(); ?>
<?php echo form_open('verifypohon/input'); ?>

<table align="center">
<tr align="center"><td colspan="3"><h1>Input Pohon</h1></td></tr>
  <tr align="left">
<?php echo "<td>". $nama_pohon		."</td><td>".' : '.form_input($fnama_pohon). "</td>"; ?><td>*Wajib diisi</td></tr>
  <tr align="left">
  	<tr></tr>
<?php echo "<td>". $letak_pohon		."</td><td>".' : '. form_input($fletak_pohon). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr align="left">
	<tr></tr>
<?php echo "<td>". $berat_jenis		."</td><td>".' : '.form_input($berat_jenis). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr align="left">
	<tr></tr>
<?php echo "<td>". $deskripsi		."</td><td>".' : '.form_input($deskripsi). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr align="left">
	<tr></tr>
<?php echo "<td>". $foto_pohon		."</td><td>".' : '.form_input($foto_pohon). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr></tr>
<tr></tr>
<?php echo "<td></td><td>". form_submit('mysubmit','Submit!'). "</td>";  ?></tr></table>
</div>
</div>


</body>
</html>