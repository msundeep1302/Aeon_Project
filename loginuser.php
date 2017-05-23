<?php
require 'db.php';
session_start();
if(isset($_SESSION['user_email']))
{
    header('location:useraccount.php');
}
else
{
    
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
            <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <form method="POST" action="">
                <div class="form-group user">
                 
                <h3 id="sub1">LOGIN AS USER</h3>
 <?php 
if(@$_GET["msg"]=='usersuc')
{
 echo "Sign Up Was Succesful.Please Login";
 echo "<br>"; 
 } 
  ?>
<?php
 if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
     
     $encrypt_password=md5($password);
    
    if(empty($username) || empty($password))
    {
        echo"Invalid Email And Password";
    }
    else
    {
        
        $login="select username,password FROM sign_up_user WHERE username='$username' AND password='$encrypt_password' ";
        $result=mysql_query($login);
        
        if(mysql_num_rows($result) > 0)
        {
            $_SESSION['is_logged_in']=true;
            $_SESSION['user_email']=$username;
            
            header('location: useraccount.php');
        }
        else
        {
            echo "Invalid Email And Password";
        }
    }
}

 ?>
                </div>
                 
              <div class="form-group user">
                <label for="username">Email</label>
                  <input type="email" class="form-control" name="username" placeholder="Enter Your Email">
                </div>
                <div class="form-group user">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                </div>
                <div class="row">
            <div class="col-sm-1"></div>
                <div class="col-sm-5">
                <input type="submit"  value="Login"  name="login" class="btn btn-success btn-block btn1">
            </div>
              <div class="col-sm-5">
             <input type="reset"  value="Cancel"  class="btn btn-danger btn-block btn1">
              </div> 
                   
                     <div class="col-sm-3"></div> 
                <div class="col-sm-6">
             <a href="signupuser.php" class="btn btn-primary btn-block btn1"><span class="glyphicon glyphicon-user"></span> Sign Up As User </a>  
              </div> 
                 </div>
              </form>
            
         </div>
        </div>
    </div>
    </div>
         
  </body>
 </html> 