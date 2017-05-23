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
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="existingprojects.php"><span class="glyphicon glyphicon-modal-window"></span>  Projects<span class="sr-only">(current)</span></a></li>
            
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
		 <h3 class="icon">To Create A Project</h3> <a href="adminaccount.php">CLICK HERE</a> <br> 
              
                  <h3 class="icon">To Submit A Project</h3> <a href="useraccount.php">CLICK HERE</a>
            </div>
            
          <div class="col-sm-6">
              <div class="icon1 table-responsive">
              <h3 align="center" class="icon">Existing Projects</h3>
 <?Php
           
	$qry=mysql_query("select * from admin_new_projects");
    echo "<table class='table-hover' border='2' width='100%' cellpadding='10' cellspacing=''>";
	echo "<tr><th>ID</th><th>ProjectName</th><th>StartDate</th><th>EndDate</th><th>Project Description</th></tr>";
	while($row=mysql_fetch_array($qry))
	{
	echo "<tr><td>".$row["id"]."</td>
     <td>".$row["projectname"]."</td>
      <td>".$row["startdate"]."</td><td>".$row["enddate"]."</td><td>".$row["description"]."</td></tr>";
    }
	echo"</table>";
?>
              </div>
            </div>
         </div>
      </div>
    </div>
 </body>
 </html> 