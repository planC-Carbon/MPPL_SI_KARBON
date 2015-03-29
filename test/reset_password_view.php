<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles.css">
<link rel="stylesheet" href="../bootstrap.min.css">
<title>Reset Password</title>
<link rel="icon" type="image/jpg" href="../images/siklus.jpg">
</head>
<body background="../images/siteBackground.jpg">

<div class="row" style="padding-top:100px;">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="well" align="center"\>
   <h1>Reset Password</h1>
   <br/>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifyreset'); ?>
     <label for="username">Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <br/>
     <label for="email">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
     <input type="text" size="20" id="email" name="email"/>
     <br/>
     <br/>
     <label for="new_password">New Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</label>
     <input type="password" size="20" id="passowrd" name="password1"/>
     <br/>
     <br/>
      <label for="confirm_password">Confirm Password :</label>
     <input type="password" size="20" id="passowrd" name="confirmpassword"/>
     <br/>
     <br/>
    <input class="btn btn-success" type="submit" value="Submit!">
   </form>
   </div>
   </div>
   </div>
   </div>
 </div>
 </body>
</html>
