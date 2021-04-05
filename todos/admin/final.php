<?php
session_start();

if ( !isset( $_SESSION[ 'email' ] )) {
  header( 'location:login.php' );

}

else{
	include 'loggedinheader.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<style>
h1 {
    font-size: 80px;
    color: black;
}
body {
    background-image: url("../images/mountains_clouds_sky_tops_103244_1920x1080.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}
p {
    font-size: 23px;
}
</style>
</head>

<body>
<h1>HOME</h1>
<?php
	$email = $_SESSION[ "email" ];
	require( "connection.php" );
$query = "select * from admin_details where email='$email'";
$result = mysqli_query( $con, $query );

$count = mysqli_num_rows( $result );
if ( $count > 0 ) {
  $row = mysqli_fetch_array( $result );
  $nname = $row[ "name" ];

?>
<p>Welcome <?php echo $nname; }?> </p>
</body>
</html>
<?php 
}


?>