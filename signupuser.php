<?php
require 'db.php';
  if(@$_POST["submit"]=='Sign Up')
  {
      $firstname=$_POST["firstname"];
      $lastname=$_POST["lastname"];
      $email=$_POST["email"];
      $password=$_POST["password"];
     
      $check=mysql_query("select * from sign_up_user where username='$email'");
      $count=mysql_num_rows($check);
      if($count<=0)
      {
          $hash=md5($password);
        $qry=mysql_query("insert into sign_up_user(firstname,lastname,username,password) values('$firstname','$lastname','$email','$hash')"); 
          header('location:loginuser.php?msg=usersuc');  
      }
      else
      {
        header('location:signupuser.php?msg=userfail');  
      }
 }  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title> My Task</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="style.css" rel="stylesheet" type="text/css">


  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    
    <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">AEON</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home </a></li>
            <li><a href="existingprojects.php"><span class="glyphicon glyphicon-modal-window"></span> Projects <span class="sr-only"></span></a></li>
              <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="signupadmin.php">As Admin</a></li>
              <li><a href="signupuser.php">As User</a></li>
                 </ul>
             <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Login <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="loginadmin.php">As Admin</a></li>
              <li><a href="loginuser.php">As User</a></li>
                 </ul>
       </ul>
     </div>
  </div>
</nav>
<div class="main">
      <div class="container">
          
		<div class="row">
          <div class="col-sm-6">
            <h2 class="icon">Welcome to AEON'S Project Drive</h2>
              <h3 class="icon">Simple To Assign</h3>
<p class="icon1">AEON allows you to create solutions for onboarding projects and ensures that it was completed successfully.
</p><h3 class="icon">No self reporting checklist, just peace of mind.</h3><h5 class="icon1">Explore your favorite projects through an exciting scavenger race. Find clues and solve puzzles to find the solutions. A fun activity for all settings and groups.</h5>.
<h3 class="icon">Simple To Create</h3>
<h5 class="icon1">
Just get a team member to perform the task  and we'll record how they did it. </h5>
            </div>
            <div class="col-sm-1"></div>
          <div class="col-sm-5">
            <form method="post" action="">
                <div class="form-group register">
                    <h2 id="sub1">SIGN UP AS USER</h2>
                    <?php 
                       if(@$_GET["msg"]=='userfail'){
                        echo "Email Already Exists.Try Again";
                        echo "<br>"; 
                       } 
                    ?>
                   <label for="firstname">FirstName</label>
                    
                    <input type="text" id="firstname" class="form-control" name="firstname" placeholder="Enter Your First Name" required>
                </div>
                
                <div class="form-group register">
                    <label for="lastname">LastName</label>
                    <input type="text" id="lastname" class="form-control" name="lastname" placeholder="Enter Your Last Name" required>
                </div>
                   
                <div class="form-group register">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                </div>
                
                 <div class="form-group user">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                </div>
                
                
                 <div class="row"></div> 
                <div class="col-sm-6">
                    <input type="submit" id="submit" value="Sign Up" name="submit" class="btn btn-success btn-block btn1">
                </div>
                
                <div class="col-sm-6">
                    <input type="reset" class="btn btn-danger btn-block btn1" value="Cancel">
               </div>
              </form>
            </div>
         </div>
      </div>
    </div>
 </body>
 </html> 