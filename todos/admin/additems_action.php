<?php
session_start();
$email = $_SESSION[ 'email' ];
require( "connection.php" );


$name = $_REQUEST[ "listitemmm" ];

$query = "select * from `list` where `listitem`='$name' and email='$email'";
$result = mysqli_query( $con, $query );
$count = mysqli_num_rows( $result );
if ( $count > 0 ) {
	echo "The item is already added.";

}
else{
	date_default_timezone_set('Asia/Kolkata');
	$date=date("l jS \of F Y h:i:s A");

$stmt = $con->prepare("INSERT INTO list(time,listitem,email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $date,$name,$email);


$stmt->execute();
$counttwo = mysqli_affected_rows( $con );
if ( $counttwo > 0 ) {
  $status = "sucess";
} else {
  $status = "fail";
}
header( "location:additems.php?registration=" . $status );
}

$stmt->close();
$conn->close();
?>