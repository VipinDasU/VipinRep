<?php
session_start();

if ( !isset( $_SESSION[ 'email' ] ) ) {
  header( 'location:login.php' );

}
else{
	
	include( 'loggedinheader.php' );


require( "connection.php" );
$email = $_SESSION[ 'email' ];
$query = "select * from list where Completed='Yes' and email='$email'";
$result = mysqli_query( $con, $query );
$count = mysqli_num_rows( $result );
if ( $count > 0 ) {
  ?>
<html>
<head>
<style>
body {
    background-image: url("../images/grey-wallpaper-hd-download-free-grey-background-.jpg");
	
}
	table{
		position: relative;
		top:20px;
		
	}

</style>
</head>
<body>
<table border="1">
  <tr>
    <th>Date and time of assignment</th>
    <th>List item</th>
	  <th>Date and time of completion</th>
  </tr>
  
    <?php
    while($row = mysqli_fetch_array( $result )){
    echo "<tr><td>" . $row[ 'time' ]. "</td>";
    echo "<td>" . $row[ 'listitem' ] . "</td>";
		echo "<td>" . $row[ 'timeofcompletion' ] . "</td></tr>";
		
	}
    ?>
  
</table>
</body>
</html>
<?php
} else {
  ?>
<html>
<head>
<style>
body {
    background-image: url("../images/grey-wallpaper-hd-download-free-grey-background-.jpg");
	
}
	table{
		position: relative;
		top:20px;
		
	}
</style>
</head>
<body>
	<table border="1">
  <tr>
    <th>Date and time of assignment</th>
    <th>List item</th>
	  <th>Date and time of completion</th>
  </tr>
	</table>
	<?php
}
}
?>
</body>
</html>