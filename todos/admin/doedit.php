<?php
session_start();

require( "connection.php" );

$email = $_SESSION[ 'email' ];
$id = $_SESSION[ 'finalid' ];
$name = $_REQUEST[ 'listitemmm' ];
$one = $_REQUEST[ 'one' ];

$query = "select * from list where id='$id'";
$result = mysqli_query( $con, $query );
$count = mysqli_num_rows( $result );
if ( $count > 0 ) {
date_default_timezone_set('Asia/Kolkata');
	$dateee=date("l jS \of F Y h:i:s A");
	$stmt = $con->prepare("update list set listitem=?, timeofcompletion=?, Completed=? where id=?");
$stmt->bind_param("sssi", $name,$dateee,$one,$id);


$stmt->execute();
  $query_update = "";
  mysqli_query( $con, $query_update );
  $count = mysqli_affected_rows( $con );

  if ( $count > 0 ) {
    $updatestatus = "sucess";
  } else {
    $updatestatus = "error";
  }

} else {

  $updatestatus = "error";

}

header( "location:edit.php?status=" . $updatestatus );
$stmt->close();
$conn->close();
?>
