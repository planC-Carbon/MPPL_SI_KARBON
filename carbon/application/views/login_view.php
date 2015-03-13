<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles.css">
<link rel="stylesheet" href="../bootstrap.min.css">
<title>Login Anggota</title>
<link rel="icon" type="image/jpg" href="../images/siklus.jpg">
</head>
<body background="../images/siteBackground.jpg">

<div class="row" style="padding-top:100px;">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="well" align="center">
   <h1>Login Anggota</h1>
   <br/>
   <br/>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username&nbsp&nbsp&nbsp:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <br/>
     <label for="password">Password &nbsp&nbsp&nbsp:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <br/>
      <label for="role">Jabatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
    <select name="role">
        <option value="admin">admin&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
        <option value="anggota">anggota</option>
      </select>
     <br/>
     <br/>
          <input class="btn btn-success" type="submit" value="Login">
      <div align="right">
      <label><a href="http://localhost:81/CI/index.php/reset_password">Forgot Password?</a></label>
      </div>
   </form>
   </div>
   </div>
   </div>
   </div>
 </div>
 </body>
</html>
