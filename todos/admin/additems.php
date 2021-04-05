<?php
session_start();


if ( !isset( $_SESSION[ 'email' ] ) ) {
  header( 'location:login.php' );

}
else{
	
include( 'loggedinheader.php' );
require( "connection.php" );
$email = $_SESSION[ 'email' ];


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add items</title>
<style>
body {
    background-image: url(../images/grey-wallpaper-hd-download-free-grey-background-.jpg);
}
form {


    top: 100px;
    font-size: 25px;
    color: #03C;

}
	table{


    top: 300px;
    font-size: 25px;
    color: #03C;
	}
</style>
<script>
function fun()
{
var name=document.getElementById("Name");

if(name.value=="")
{
alert("Enter your to do list item");
name.focus();
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
<form class="form-horizontal" action="additems_action.php" onSubmit="return fun()" id="usrform">
   
    <div class="form-group">
    <label class="control-label col-sm-2" for="Name">Task name:</label>
    <div class="col-sm-10">
         <textarea rows="4" cols="25" name="listitemmm" form="usrform" id="Name">
</textarea>   

</div>
</div>
<div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
<input type="submit" value="Submit">
</div>
</div>
</form>
	</div>

<?php

	$query = "select * from list where Completed!='Yes' and email='$email'";
$result = mysqli_query( $con, $query );
$count = mysqli_num_rows( $result );
if ( $count > 0 ) {
  ?>


<table border="1">
  <tr>
    <th>Date and time of assignment</th>
    <th>Tasks</th>
	  <th>Action</th>
  </tr>
  
    <?php
    while($row = mysqli_fetch_array( $result )){
    echo "<tr><td>" . $row[ 'time' ]. "</td>";
    echo "<td>" . $row[ 'listitem' ] . "</td>";
		echo "<td><a href='edit.php?id=". $row['id'] . "'> EDIT </a></td></tr>";
		
	}
    ?>
  
</table>
</body>
</html>
<?php
} }
if ( isset( $_REQUEST[ "registration" ] ) ) {
  $res = $_REQUEST[ "registration" ];
  echo( "<script>alert('Addition " . $res . "');</script>" );
}

?>
