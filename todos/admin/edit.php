<?php
session_start();


if ( !isset( $_SESSION[ 'email' ] ) ) {
  header( 'location:login.php' );

}
else{
	
include( 'loggedinheader.php' );

	if ( isset( $_REQUEST[ "id" ] ) ) {
    $iddd = $_REQUEST[ "id" ];
    $_SESSION[ 'finalid' ] = $iddd;
require( "connection.php" );
$email = $_SESSION[ 'email' ];
	

	$query = "select * from list where id='$iddd'";
$result = mysqli_query( $con, $query );
$count = mysqli_num_rows( $result );
if ( $count > 0 ) {
	$row = mysqli_fetch_array( $result );
$id = $row[ 'id' ];
      $llll = $row[ 'listitem' ];

		
	  $_SESSION[ 'llll' ] = $llll;

   
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
span {
  
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
	
	</head>

<body>
	<div class="container-fluid">
	 
<form action="doedit.php" onSubmit="return fun()" id="usrform">
  <span>
  <pre><textarea rows="4" cols="45" name="listitemmm" form="usrform" id="Name">
<?php echo $llll; ?></textarea>   
  Completed     :Yes<input type="checkbox" id="checkbox1" name="one" value="Yes" /><br>
                
  
<input type="submit" value="Submit">
</pre>
  </span>
</form>

	</div>
	</body>
</html><?php
}
}
	
}
if ( isset( $_REQUEST[ "status" ] ) ) {
  $message = $_REQUEST[ "status" ];
  echo "</br></br><span>Updation $message.</span>";
}


?>