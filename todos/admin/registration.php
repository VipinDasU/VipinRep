<?php
include( 'header.php' );

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<style>
body {
    background-image: url(../images/grey-wallpaper-hd-download-free-grey-background-.jpg);
}
span {
    position: fixed;
    left: 300px;
    top: 100px;
    font-size: 25px;
    color: #03C;
}
</style>
<script>
function fun()
{
var name=document.getElementById("Name");
var email=document.getElementById("Email");
var password=document.getElementById("Password");

if(name.value=="")
{
alert("Enter your name");
name.focus();
return false;	
}
else if(isNaN(name.value)==false)
{
alert("The name should not contain any numbers");
name.focus();
return false;	
}
else if(email.value=="")
{
alert("Enter an email id");
email.focus();
return false;	
}
else if(email.value.indexOf("@")==-1)
{
alert("Enter a valid email id");
email.focus();
return false;	
}
else if(email.value.indexOf(".com")==-1)
{
alert("Enter a valid email id");
email.focus();
return false;	
}
else if(password.value=="")
{
alert("Enter a password");
password.focus();
return false;	
}
else
{
return true;	
}
}
</script>
</head>

<body>
	<div class="container-fluid">
<form action="registration_action.php" onSubmit="return fun()">
  <span>
  <pre>Name    :<input type="text" id="Name" name="username"><br>
Email   :<input type="text" id="Email" name="email"><br>
Password:<input type="password" id="Password" name="password"><br>
<input type="submit" value="Submit">
</pre>
  </span>
</form>
	</div>
</body>
</html>
<?php
if ( isset( $_REQUEST[ "registration" ] ) ) {
  $res = $_REQUEST[ "registration" ];
  echo( "<script>alert('registration " . $res . "');</script>" );
}

?>