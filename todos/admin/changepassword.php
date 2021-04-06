<?php
session_start();

if ( !isset( $_SESSION[ 'email' ] ) ) {
  header( 'location:login.php' );

}
else{
	
include( 'loggedinheader.php' );
?>
<html>
<head>
<meta charset="utf-8">
<title>changepassword</title>
<style>
body {
    background-image: url(../images/grey-wallpaper-hd-download-free-grey-background-.jpg);
}

table{
    
}

span {
    
    display: table;
    margin:0 auto;
    
    font-size: 25px;
    color: #03C;
}
</style>
<script>
function man()
{
var oldpassword=document.getElementById("OLDPASSWORD");
var newpassword=document.getElementById("NEWPASSWORD");
var confirmpassword=document.getElementById("CONFIRMPASSWORD");

if(oldpassword.value=="")
{
   alert("Enter the old password.");
   oldpassword.focus();
   return false;	
}
else if(newpassword.value=="")
{
	alert("Enter the new password.");
	newpassword.focus();
	return false;
}
else if(confirmpassword.value=="")
{
   alert("Enter the new password again.");
   confirmpassword.focus();
   return false;	
}
else if(confirmpassword.value!=newpassword.value)
{
   alert("Enter the same new password");
   confirmpassword.focus();
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
<form class="form-horizontal" action="changepassword_action.php" method="post" onsubmit="return man()">
<div class="form-group">
      <label class="control-label col-sm-2" for="OLDPASSWORD">OLD PASSWORD :</label>
      <div class="col-sm-10">
<input type="password" id="OLDPASSWORD" name="Oldpassword">
</div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="NEWPASSWORD">NEW PASSWORD:</label>
      <div class="col-sm-10">          
<input type="password" id="NEWPASSWORD" name="Newpassword">
</div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="CONFIRMPASSWORD">CONFIRM PASSWORD:</label>
      <div class="col-sm-10">     
<input type="password" id="CONFIRMPASSWORD" name="Confirmpassword">
</div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
<input type="submit" value="submit" >
</div>
    </div>
</form>
</div>
</body>
</html>
<?php
	
	}
?>
