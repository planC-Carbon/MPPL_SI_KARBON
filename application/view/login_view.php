<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles.css">
<title>Login Anggota</title>
<link rel="icon" type="image/jpg" href="../../images/siklus.jpg">
</head>
<body background="../images/siteBackground.jpg">

<div class="container-narrow">
<div class="well" align="center">
   <h1>Login Anggota</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
   </div>
   </div>
 </body>
</html>
