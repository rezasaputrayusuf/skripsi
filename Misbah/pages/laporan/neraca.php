<?php
	spl_autoload_register(function ($class) {
		include 'model/' . $class . '.php';
	});
 
	$database = new Database();
	$db = $database->getConnectionMysqli();
	error_reporting(0);
	
	$neraca = new Coa($db);
	$a = $_POST['bulan']."-".$_POST['tahun'];
	
	$neraca->where = $a;
	$data = $neraca->readAktiva();
	$num = count($data);
	
	$data1 = $neraca->readPasiva();
	$num1 = count($data1);
	
	
?>
<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			
			<div class="page-header">
				<h1>
				</h1>
			</div><!-- /.page-header -->

			<div class="row" id="ilang">
				<div class="col-xs-12"  id="ilang">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header" >
						Laporan Neraca
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
					<h1>Laporan Neraca</h1>
					<h3>Periode Bulan <?=date("M Y")?></h3>
				</div>
				<div class="col-xs-6">	
					<div>
					<?php
						if($num>0){ ?>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center" colspan=4>AKTIVA</th>
								</tr>
							</thead>

							<tbody>
							<tr>
									<td class="center"></td>
									<th align="left" colspan=3>AKTIVA</th>
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
								echo '
								<tr>
									<td class="center"></td>
									<th align="left"  colspan=2>TOTAL AKTIVA</th>
									<td>Rp. '.number_format($saldoa,0,",",".").'</td>
								</tr>';
							?>
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
				<div class="col-xs-6">	
					<div>
					<?php
						if($num>0){ ?>
						<table id="" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center" colspan=4>PASIVA</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td class="center"></td>
									<th align="left"  colspan=3 >KEWAJIBAN</th>
								</tr>
								<tr>
									<td class="center"></td>
									<td align="left"  colspan=2>Total Kewajiban</td>
									<td>Rp.</td>
								</tr>
								
								<tr>
									<td class="center"></td>
									<th align="left"  colspan=3>MODAL</th>
								</tr>
							<?php 
							$no =1;
								
								foreach($data1 as $row) {
									extract($row);	
								echo '
								<tr>
									<td class="center"></td>
									<td align="left">'.$perkiraan.'</td>
									<td>Rp. '.number_format($saldo,0,",",".").'</td>
									<td></td>
								</tr>';
								$saldoa1+=$saldo;
								}
								echo '
								<tr>
									<td class="center"></td>
									<th align="left"  colspan=2>TOTAL MODAL</th>
									<td>Rp. '.number_format($saldoa1,0,",",".").'</td>
								</tr>';
								
								echo '
								<tr>
									<td class="center"></td>
									<th align="left"  colspan=2>TOTAL PASIVA</th>
									<td>Rp. '.number_format($saldoa1,0,",",".").'</td>
								</tr>';
							?>
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
