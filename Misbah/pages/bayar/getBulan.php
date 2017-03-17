<?php
$q = $_GET['t'];
$r = $_GET['u'];


include_once "../../conn.php";
$sql="SELECT * FROM tagihan WHERE item_tagihan = '".$q."' AND siswa = '".$r."'";
$result = mysqli_query($con,$sql);

echo '<select name="bulan[]">';
while($row = mysqli_fetch_array($result)) {
    // echo $q;
    // echo $r;
	
	if($row['juli']==0){
		echo '<option value="juli">Juli</option>';
	}
	if($row['agustus']==0){
		echo '<option value="agustus">Agustus</option>';
	}
	if($row['september']==0){
		echo '<option value="september">September</option>';
	}
	if($row['oktober']==0){
		echo '<option value="oktober">Oktober</option>';
	}
	if($row['november']==0){
		echo '<option value="november">November</option>';
	}
	if($row['desember']==0){
		echo '<option value="desember">Desember</option>';
	}
	if($row['januari']==0){
		echo '<option value="januari">Januari</option>';
	}
	if($row['februari']==0){
		echo '<option value="februari">Februari</option>';
	}
	if($row['maret']==0){
		echo '<option value="maret">Maret</option>';
	}
	if($row['april']==0){
		echo '<option value="april">April</option>';
	}
	if($row['mei']==0){
		echo '<option value="mei">Mei</option>';
	}
	if($row['juni']==0){
		echo '<option value="juni">Juni</option>';
	}
}
echo '</select>';
mysqli_close($con);
?>
