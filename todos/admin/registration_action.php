<?php
require( "connection.php" );
$name = $_REQUEST[ "username" ];
$email = $_REQUEST[ "email" ];
$password = $_REQUEST[ "password" ];

$query = "select * from admin_details where email='$email'";
$result = mysqli_query( $con, $query );
$count = mysqli_num_rows( $result );
if ( $count > 0 ) {
	echo "There is already an account with this email id";

}
else{
	
$querytwo = "insert into admin_details(name,email,password) values('$name','$email','$password')";
mysqli_query( $con, $querytwo );
$counttwo = mysqli_affected_rows( $con );
if ( $counttwo > 0 ) {
  $status = "sucess";
} else {
  $status = "fail";
}
header( "location:registration.php?registration=" . $status );
}
?>