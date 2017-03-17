<?php
	spl_autoload_register(function ($class) {
		include 'model/' . $class . '.php';
	});
 
	$database = new Database();
	$db = $database->getConnectionMysqli();
	error_reporting(0);
	$ju = new Laporan($db);
	$a = $_POST['bulan']."-".$_POST['tahun'];
	
	$ju->where = $a;
	$data = $ju->read();
	$num = count($data);
	
	
?>
<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			
			<div class="page-header">
				<h1>
					Dashboard
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Laporan Arus Kas
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row" id="ilang">
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Laporan Arus Kas
					</div>

					<div>
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
			<div class="row" id="siap>
				<div class="col-xs-12">	
					<div>
					<?php
						if($num>0){ ?>
						<table id="" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">Tanggal</th>
									<th>Nama Akun</th>
									<th>Debet</th>
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
								
									echo '
									<tr>
										<td class="center">'.$tgl_trans.'</td>
										<td>KAS</td>
										<td>Rp. '.number_format($totals,0,",",".").'</td>
										<td></td>
									</tr>';
									
									$no++;
									echo '
									<tr>
										<td class="center"></td>
										<td>'.$akun.'</td>
										<td></td>
										<td>Rp. '.number_format($total,0,",",".").'</td>
										
										
									</tr>';
									$balance1 += $totals;
									$balance2 += $total;
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
									<td align="right">'.$bals.'</td>
									<td>Rp. '.number_format($balance1,0,",",".").'</td>
									<td>Rp. '.number_format($balance2,0,",",".").'</td>
									
									
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

