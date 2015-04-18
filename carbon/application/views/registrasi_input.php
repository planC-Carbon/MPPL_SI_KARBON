<html>
<head>
<link rel="stylesheet" type="text/css" href="../../styles.css">
<link rel="stylesheet" href="../../bootstrap.min.css">
<title>Input Anggota</title>
<link rel="icon" type="image/jpg" href="../../images/siklus.jpg">
</head>
<body background="../../images/siteBackground.jpg">
  <div class="row" style="padding-top:50px;">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="well" align="center">
   <h1>Input Anggota</h1>
   <br/>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifyregistrasi/index'); ?>
     <label for="nia">NRP&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
     <input type="text" size="20" id="nia" name="nia"/>
     <br/>
     <br/>
     <label for="nama">Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
     <input type="text" size="20" id="nama" name="nama"/>
     <br/>
     <br/>
     <label for="email">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</label>
     <input type="text" size="20" id="email" name="email"/>
     <br/>
     <br/>
      <label for="username">Username &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <br/>
     <label for="password">Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
     <input type="password" id="passowrd" name="password"/>
     <br/>
     <br/>
     <label for="role">Jabatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
    <select name="role">
        <option value="anggota">anggota&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
      </select>
     <br/>
     <br/>
     <?php echo "<td></td><td>". form_submit('mysubmit','Submit!'). "</td>";  ?></tr></table>
  </div> 
 </div>
 </div> 
 </div>
 </div> 
 </body>
</html>
