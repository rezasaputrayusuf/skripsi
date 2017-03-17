<?php
	spl_autoload_register(function ($class) {
		include 'model/' . $class . '.php';
	});
 
	$database = new Database();
	$db = $database->getConnectionMysqli();
	
	error_reporting(0);
	// $ju = new Laporan($db);
	// $a = $_POST['bulan']."-".$_POST['tahun'];
	
	// $ju->where = $a;
	// $data = $ju->read();
	// $num = count($data);
	
	$jurnal = new Jurnal($db);
	$a = $_POST['bulan']."-".$_POST['tahun'];
	$jurnal->where = $a;
	$data = $jurnal->readJurnal();
	$num = count($data);
?>
<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			
			<div class="page-header">
				<h1>
					
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Laporan Jurnal Umum
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row" id="ilang">
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header" id="ilang">
						Laporan Jurnal Umum 
					</div>

					<div >
						<form class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<br>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tahun </label>
										<div class="col-sm-9">
											<select name="tahun">
												
												<option value="<?=date("Y");?>"><?=date("Y");?></option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bulan </label>
										<div class="col-sm-9">
											<select name="bulan">
												<option value="<?=date("m");?>"><?=date("m");?></option>
												<?php
													for($i = 1;$i<=12;$i++){
														if($i<10){
															echo "<option value='0$i'>0$i</option>";
														}else{
															echo "<option value='$i'>$i</option>";
														}
													}
												?>
											</select>
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												View
											</button>

											
											&nbsp; &nbsp; &nbsp;
											<button class="btn  btn-info" type="submit" onclick="printIni()">
												<i class="ace-icon fa fa-print bigger-110"></i>
												Cetak
											</button>
										</div>
									</div>	
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row" id="siap">
				<div class="col-xs-6">	
					<div> PEMASUKAN
					<?php
						if($num>0){ ?>
						<table id="dynamic-tables" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">Tanggal</th>
									<th>Nama Akun</th>
									<th>Debet</th>
								</tr>
							</thead>

							<tbody>
							<?php 
							$no =1;
								foreach($data as $row) {
									extract($row);
									$totals = 0;
									// $pecah = explode('-',$tgl_trans);
									// $hari  	= isset($pecah[0]) ? $pecah[0] : "";
									$totals += $total;
									if($debit!=0){
									echo '
									<tr>
										<td class="center">'.$tgl_trans.'</td>
										<td>'.$keterangan.'</td>
										<td>Rp. '.number_format($debit,0,",",".").'</td>
									</tr>';
									
									$no++;
									$balance1 += $debit;
									$balance2 += $kredit;
									}
								}
								
								$bal = $balance1-$balance2;
								if($bal==0){
									$bals = "BALANCE";
								}else{
									$bals = "NOT BALANCE";
								}
								echo '
								<tr>
									<td class="center"></td>
									<td align="right">TOTAL</td>
									<td>Rp. '.number_format($balance1,0,",",".").'</td>
									
									
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
					<div>PENGELUARAN
					<?php
						if($num>0){ ?>
						<table id="dynamic-tables" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">Tanggal</th>
									<th>Nama Akun</th>
									<th>Kredit</th>
								</tr>
							</thead>

							<tbody>
							<?php 
							$no =1;
								foreach($data as $row) {
									extract($row);
									$totals = 0;
									// $pecah = explode('-',$tgl_trans);
									// $hari  	= isset($pecah[0]) ? $pecah[0] : "";
									$totals += $total;
									if($kredit!=0){
									echo '
									<tr>
										<td class="center">'.$tgl_trans.'</td>
										<td>'.$keterangan.'</td>
										<td>Rp. '.number_format($kredit,0,",",".").'</td>
									</tr>';
									
									$no++;
									$balance1 += $debit;
									$balance2 += $kredit;
									}
								}
								
								$bal = $balance1-$balance2;
								if($bal==0){
									$bals = "BALANCE";
								}else{
									$bals = "NOT BALANCE";
								}
								$sisa=$balance1-$balance2;
								echo '
								<tr>
									<td class="center"></td>
									<td align="">Sisa Dana Kas</td>
									<td>Rp. '.number_format($sisa,0,",",".").'</td>
									
									
								</tr>';
								$keluar=$sisa+$balance2;
								echo '
								<tr>
									<td class="center"></td>
									<td align="right">TOTAL</td>
									<td>Rp. '.number_format($keluar,0,",",".").'</td>
									
									
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

