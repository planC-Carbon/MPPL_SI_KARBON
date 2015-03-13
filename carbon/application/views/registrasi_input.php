<html>
<head>
<link rel="stylesheet" type="text/css" href="../../styles.css">
<title>Registrasi Anggota</title>
<link rel="icon" type="image/jpg" href="../../images/siklus.jpg">
</head>
<body background="../../images/siteBackground.jpg">

<div class="container-narrow">
<div class="well" align="center">
<?php echo validation_errors(); ?>
<?php echo form_open('registrasi/input'); ?>

<table align="center">
<tr align="center"><td colspan="3">Form Input</td></tr>
  <tr align="left">
<?php echo "<td>". $nia		."</td><td>".' : '.form_input($fnia). "</td>"; ?><td>*Wajib diisi</td></tr>
  <tr align="left">
<?php echo "<td>". $nama		."</td><td>".' : '. form_input($fnama). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr align="left">
<?php echo "<td>". $email		."</td><td>".' : '.form_input($femail). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr align="left">
<?php echo "<td>". $username		."</td><td>".' : '.form_input($fusername). "</td>"; ?><td>*Wajib diisi</td></tr>
<tr align="left">
<?php echo "<td>". $password		."</td><td>".' : '.form_input($fpassword). "</td>"; ?><td>*Wajib diisi</td></tr>
  <tr align="left">
<td><label for="role">Role :</label>
    <select name="role">
        <option value="anggota">anggota</option>
      </select>
     <br/></td></tr>
<?php echo "<td></td><td>". form_submit('mysubmit','Submit!'). "</td>";  ?></tr></table>
</div>
</div>


</body>
</html>