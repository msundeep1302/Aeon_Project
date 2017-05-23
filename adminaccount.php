<?php 
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title> My Task</title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <link href="style.css" rel="stylesheet" type="text/css">
      <script>
  $( function() {
	$("#inp1").datepicker();
  } );
  $( function() {
	$("#inp2").datepicker();
  } );
  </script>
<?php
session_start();
if(isset($_SESSION['admin_email']))
{
    
}
else
{
    
    echo"<h3 align='center'><span class='glyphicon glyphicon-warning-sign'> </span> You are not authorized unless you login </h3> <br> <h3 align='center'>TO CREATE A PROJECT</h3>";
    echo "<p align='center'><a href='loginadmin.php'>CLICK HERE</a></p>";
    echo" <br> <h3 align='center'>TO SUBMIT A PROJECT</h3>";
    echo "<p align='center'><a href='loginuser.php'>CLICK HERE</a></p>";
    
    die();
}
      
      
?>
     
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
            <a class="navbar-brand ">AEON</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>  Projects<span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">As Admin</a></li>
              <li><a href="#">As User</a></li>
                 </ul>
             <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Login <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">As Admin</a></li>
              <li><a href="#">As User</a></li>
                 </ul>
       </ul>
         <ul class="nav navbar-nav navbar-right">
        <li><a href="adminlogout.php"><span class="glyphicon glyphicon-user"></span> Logout As Admin</a></li>
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
                <div class="form-group register">
                    
                    <h3 id="sub">CREATE NEW PROJECT HERE</h3>
 <?php  
if(@isset($_POST['submit']))
  {
      $projectname=$_POST["projectname"];
      $startdate=$_POST["startdate"];
      $enddate=$_POST["enddate"];
      $description=$_POST["description"];
      
     $qry=mysql_query("insert into admin_new_projects(projectname,startdate,enddate,description) values('$projectname','$startdate','$enddate','$description')"); 
           
     $result= mysql_query($qry);
     echo"Project Created Succesfully";
     echo"<br>";
    
  }
?>
                     <label for="projectname">ProjectName</label>
                    <input type="text" id="projectname" class="form-control" name="projectname" placeholder="Enter Your Project Name" required>
              
                </div>
                 <div class="form-group register">
                   <label for="startdate">StartDate</label>
                    <input type="text" id="inp1" class="form-control" name="startdate" placeholder="Start Date of your project" required>
                </div>
                   
                <div class="form-group register">
                    <label for="enddate">EndDate</label>
                    <input type="text" id="inp2" class="form-control" name="enddate" placeholder="End Date of your project" required>
                </div>
                   
                <div class="form-group register">
                    <label for="description">Project Description</label>
                    
                    <textarea id="des" class="form-control" name="description" placeholder="Describe Your Project in less than 200 words" required></textarea>
                    
                </div>
                
                 <div class="row"></div> 
                <div class="col-sm-6">
                    <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-success btn-block btn1">
                </div>
                
                <div class="col-sm-6">
                    <input type="reset" class="btn btn-danger btn-block btn1" value="Cancel">
               </div>
              </form>
              <div class="col-sm-3"></div>
                <div class="col-sm-6">
                <a href="adminlogout.php" class="btn btn-primary btn-block btn1"><span class="glyphicon glyphicon-user"></span> Logout As Admin</a>
              </div>
             </div>
         </div>
      </div>
    </div>
 </body>
 </html> 