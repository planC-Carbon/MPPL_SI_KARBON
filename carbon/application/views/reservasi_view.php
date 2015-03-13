<html>
<head>
<link rel="stylesheet" type="text/css" href="../../styles.css">
<title>Registrasi Anggota</title>
<link rel="icon" type="image/png" href="../../images/saveKBS.png">
</head>
<body background="../../images/siteBackground.jpg">

<div class="container-narrow">
<div class="well" align="center">
<?php echo form_open('home/reservasi'); ?>

<table align="center">
<tr align="center"><td colspan="3">Form Reservasi Tiket KBS</td></tr>
  <tr align="left">
<?php echo form_hidden('Kode_Reservasi',$fKode_Reservasi['value']); ?></tr>
  <tr align="left">
<?php echo "<td>". $Nama_Anggota        ."</td><td>".' : '. form_dropdown('ID_Anggota',$isiID,set_value('ID_Anggota',$ID_Anggota)).br()."</td>"; ?></tr>
  <tr align="left">
<?php echo "<td>". form_hidden('Tgl_Pesan',$fTgl_Pesan['value'])."</td>"; ?></tr>
  <tr align="left">
<?php echo "<td>". $Tgl_Reservasi		."</td><td>".' : '. form_input($fTgl_Reservasi).br(). "</td>"; ?></tr>
  <tr align="left">
<?php echo "<td>". $Jumlah_Tiket		."</td><td>".' : '. form_input($fJumlah_Tiket).br(). "</td>"; ?></tr>
  <tr align="left">
<?php echo "<td></td><td>". form_submit('mysubmit','Submit!'). "</td>";  ?></tr></table>
<?php echo form_close(); ?>
</div>
</div>

</body>
</html>