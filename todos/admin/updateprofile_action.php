<?php
session_start();

require( "connection.php" );

$email = $_SESSION[ 'email' ];
$name = $_REQUEST[ 'Name' ];
$query = "select * from admin_details where email='$email'";
$result = mysqli_query( $con, $query );
$count = mysqli_num_rows( $result );
if ( $count > 0 ) {

  $query_update = "update admin_details set name='$name' where email='$email'";
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

header( "location:status.php?status=" . $updatestatus );
?>
