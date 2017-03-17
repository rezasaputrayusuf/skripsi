<?php
$q = $_GET['q'];
// $r = $_GET['r'];


include_once "../../conn.php";
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