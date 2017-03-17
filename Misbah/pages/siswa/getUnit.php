<?php
$q = $_GET['q'];
// $r = $_GET['r'];


include_once "../../conn.php";
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