<?php
	if($act=='view'){
		
		include "bukubesardetail.php";
	
	}else{
		

	spl_autoload_register(function ($class) {
		include 'model/' . $class . '.php';
	});
 
	$database = new Database();
	$db = $database->getConnectionMysqli();
	error_reporting(0);
	$bb = new Coa($db);
	$data = $bb->readAll();
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
									<th>Nama Akun</th>
									<th>Saldo</th>
									<th>Buku Besar</th>
								</tr>
							</thead>

							<tbody>
							<?php 
							$no =1;
								$state = "";
								foreach($data as $row) {
									extract($row);
									
									if($state==""){
											$state=$keterangan;
											echo '
											<tr>
												<th colspan=4>'.$state.'</td>
											</tr>';
									}else{
									if($keterangan!=$state){
										$state=$keterangan;
										echo '
										<tr>
											<th colspan=4>'.$state.'</td>
										</tr>';
										
									}}
									echo '
									<tr>
										<td class="">'.$perkiraan.'</td>
										<td>Rp. '.number_format($saldo,0,",",".").'</td>
										<td><a href="?p='.$page.'-view-'.$id.'">Buku Besar</a></td>
									</tr>';
									$no++;
									
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

	<?php } ?>
