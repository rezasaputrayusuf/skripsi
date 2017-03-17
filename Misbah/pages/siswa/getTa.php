<?php
// $q = $_GET['q'];
// $r = $_GET['r'];


include_once "../../conn.php";
$sql="SELECT * FROM tahun_ajaran";
$result = mysqli_query($con,$sql);

   // echo $row['biaya'];
    echo '
	<select name="ta" id="ta" required>
		<option value="">--------------</option>
	';
	while($row = mysqli_fetch_array($result)) {	
		echo '
				<option value="'.$row["ta"].'">'.$row["ta"].'</option>
		';
	}
	echo '</select>';
mysqli_close($con);
?>