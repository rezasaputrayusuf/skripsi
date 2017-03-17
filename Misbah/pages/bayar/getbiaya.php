<?php
$q = $_GET['q'];
$r = $_GET['r'];

include_once "../../conn.php";

$sql="SELECT * FROM item_tagihan WHERE item_bayar = '".$q."' AND kelas = '".$r."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo $row['biaya'];
}

mysqli_close($con);
?>