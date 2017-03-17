<?php
	spl_autoload_register(function ($class) {
		include 'model/' . $class . '.php';
	});
 
	$database = new Database();
	$db = $database->getConnectionMysqli();
	// error_reporting(0);
	$bbd = new Laporan($db);
	$bbd->where = $id;
	$data = $bbd->bukuBesar();
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
						Laporan Buku Besar
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Laporan Buku Besar
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">	
					<div>
					<?php
						if($num>0){ ?>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>Keterangan</th>
									<th>Debit</th>
									<th>Kredit</th>
									<th>Saldo</th>
								</tr>
							</thead>

							<tbody>
							<?php 
							$saldo = 0;
								foreach($data as $row) {
									extract($row);
									
									if($debit=="" && $kredit!=""){
										$saldo=$saldo-$kredit;
									}else{
										$saldo=$saldo+$debit;
									}
									echo '
									<tr>
										<td class="center">'.$tgl_trans.'</td>
										<td class="">'.$keterangan.'</td>
										<td>Rp. '.number_format($debit,0,",",".").'</td>
										<td>Rp. '.number_format($kredit,0,",",".").'</td>
										<td>Rp. '.number_format($saldo,0,",",".").'</td>
									</tr>';
									
								}
								
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


