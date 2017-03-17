<?php
$q = $_GET['q'];
// $r = $_GET['r'];

$con = mysqli_connect('localhost','root','kucing','misbah');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"misbah");
$sql="SELECT * FROM ruangan WHERE unit = '".$q."' GROUP BY level";
$result = mysqli_query($con,$sql);

   // echo $row['biaya'];
    echo '
	<select name="level" id="level" onchange="showLevel(this.value)" required>
		<option value="">--------------</option>
	';
	while($row = mysqli_fetch_array($result)) {	
		echo '
				<option value="'.$row["level"].'">'.$row["level"].'</option>
		';
	}
	echo '</select>';
mysqli_close($con);
?>