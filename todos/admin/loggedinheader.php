<?php 
session_start();
$specone="vvipvvipmonuone";
$_SESSION[ "specone" ] = $specone;
?>
<html>
	<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
<body>
<style>
a
{
   text-decoration:none;
   font-size:23px;
}
a:link,a:visited
{
   color:#999999;	
}
header
{
   background-color:#000;	
   position:relative;
   height:40px;
}
</style>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="final.php">Home</a></li>
        
        <li><a href="changepassword.php">Change password</a></li>
        <li><a href="updateprofile.php">Update profile</a></li>
        <li><a href="viewitems.php">View completed tasks</a></li>
        <li><a href="additems.php">Add tasks</a></li>
        <li><a href="logout.php">Log out</a></li>
      </ul>

    </div>
  </div>
</nav>


</body>
</html>