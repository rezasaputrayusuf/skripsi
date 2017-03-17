<?php
$q = $_GET['q'];
// $r = $_GET['r'];

$con = mysqli_connect('localhost','root','kucing','misbah');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"misbah");
$sql="SELECT * FROM ruangan WHERE level = '".$q."' ";
$result = mysqli_query($con,$sql);

   // echo $row['biaya'];
    echo '
	<select name="ruangan" id="ruangan" required>
		<option value="">--------------</option>
	';
	while($row = mysqli_fetch_array($result)) {	
		echo '
				<option value="'.$row["nama"].'">'.$row["nama"].'</option>
		';
	}
	echo '</select>';
mysqli_close($con);
?>