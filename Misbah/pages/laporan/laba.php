<?php
	spl_autoload_register(function ($class) {
		include 'model/' . $class . '.php';
	});
 
	$database = new Database();
	$db = $database->getConnectionMysqli();
	error_reporting(0);
	$laba = new Coa($db);
	$a = $_POST['bulan']."-".$_POST['tahun'];
	
	$laba->where = $a;
	$data1 = $laba->readAktiva();
	$data = $laba->readLaba();
	$num = count($data);
	
	
?>
<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			
			<div class="page-header">
				<h1>
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Laporan Laba Rugi
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row" id="ilang">
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Laporan Laba Rugi
						&nbsp; &nbsp; &nbsp;
						<button class="btn  btn-info pull-right" type="submit" onclick="printIni()">
							<i class="ace-icon fa fa-print bigger-110"></i>
							Cetak
						</button>
					</div>

					<div>
						<form class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<br>
							
							
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 center" >
					<h1>Laporan Laba Rugi</h1>
					<h3>Periode Bulan <?=date("M Y")?></h3>
				</div>
				<div class="col-xs-12">	
					<div>
					<?php
						if($num>0){ 
							foreach($data1 as $row) {
								extract($row);
								$total+=$saldo;	
							}
						?>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
							</thead>

							<tbody>
								<tr>
									<th align="left" colspan=4>Pendapatan Usaha</th>
								</tr>
								<tr>
									<td></td>
									<td align="left">Pendapatan Usaha</td>
									<td>Rp. <?=number_format($total,0,",",".")?></td>
									<td></td>
								</tr>
								<tr>
									<th align="left"  colspan=3>Pendapatan Bersih</th>
									<td>Rp. <?=number_format($total,0,",",".")?></td>
								</tr>
								<tr>
									<th align="left" colspan=4>Biaya-biaya Usaha</th>
								</tr>
							<?php 
							
							$no =1;
							$saldo = 0;
								foreach($data as $row) {
									extract($row);
								
								echo '
								<tr>
									<td class="center"></td>
									<td align="left">'.$perkiraan.'</td>
									<td>Rp. '.number_format($saldo,0,",",".").'</td>
									<td></td>
								</tr>';
								$saldoa+=$saldo;
								}
								$hasil=$total-$saldoa;
							?>
								<tr>
									<th align="left" colspan=3>Total Biaya Usaha</th>
									<td>Rp. <?=number_format($saldoa,0,",",".")?></td>
								</tr>
								<tr>
									<th align="left" colspan=3>Laba/Rugi</th>
									<td>Rp. <?=number_format($hasil,0,",",".")?></td>
								</tr>
							</tbody>
						</table>
						<?php 
							}
							// tell the user if no records found
							else{
								echo "<br><div class='alert alert-info'>No records found.</div>";
							}
						?>
					</div>
				</div>
			</div>
		</div><!-- /.page-content -->
	</div>
</div>

<script>
$("#aha").click(function(){
		$("#ilang").hide();
	});
function printIni() {
	$("#ilang").hide();
    window.print();
}

</script>
