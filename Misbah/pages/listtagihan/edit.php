<?php 
	// include database and object files
	spl_autoload_register(function ($class) {
        include 'model/' . $class . '.php';
    });
	 
	// instantiate database class
	$database = new Database();
	$db = $database->getConnectionMysqli();
	 
	// $id = $_REQUEST['id'];
	// initialize object
	$item = new Tagihan($db);
	$data1 = $item->readWajib();
	$data2 = $item->readNo();
	
	$siswa = new Siswa($db);
	$siswa->id = $id;
	$data = $siswa->readOne();
	
	$def = new Defaults($db);
	$def->siswa = $id;
	$defs = $def->detail();
	$num = count($defs);
?>


<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			
			<div class="page-header">
				<h1>
					Dashboard
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Siswa
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Data Tagihan Siswa
					</div>
					<hr>
					<div>
					<h2> <?php echo $data['nama'];?> </h2>
					<h5>Pembayaran Wajib </h5><br>
					<div>
					<?php
						if($num>0){ ?>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr class="center">
									<th>No</th>
									<th>Item Tagihan</th>
									<th>Tahun</th>
									<th width="50">Juli</th>
									<th width="50">Agustus</th>
									<th width="50">September</th>
									<th width="50">Oktober</th>
									<th width="50">November</th>
									<th width="50">Desember</th>
									<th width="50">Januari</th>
									<th width="50">Februari</th>
									<th width="50">Maret</th>
									<th width="50">April</th>
									<th width="50">Mei</th>
									<th width="50">Juni</th>
									<th width="50">TOTAL</th>
								</tr>
							</thead>

							<tbody>
							<?php 
							$no = 0;
								foreach($defs as $row) {
									extract($row);
									$no++; 
									$total= $juli+ $agustus + $september + $oktober + $november + $desember + $januari + $februari + $maret + $april + $mei + $juni;
									echo '
								<tr>
									<td>'.$no.'</td>
									<td>'.$item_tagihan.'</td>
									<td>'.$tahun.'</td>
									<td>'.number_format($juli,0,",",".").'</td>
									<td>'.number_format($agustus,0,",",".").'</td>
									<td>'.number_format($september,0,",",".").'</td>
									<td>'.number_format($oktober,0,",",".").'</td>
									<td>'.number_format($november,0,",",".").'</td>
									<td>'.number_format($desember,0,",",".").'</td>
									<td>'.number_format($januari,0,",",".").'</td>
									<td>'.number_format($februari,0,",",".").'</td>
									<td>'.number_format($maret,0,",",".").'</td>
									<td>'.number_format($april,0,",",".").'</td>
									<td>'.number_format($mei,0,",",".").'</td>
									<td>'.number_format($juni,0,",",".").'</td>
									<td>'.number_format($total,0,",",".").'</td>
								</tr>';
									$inidia += $total;
								}
									echo '
									<tr>	
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>'.number_format($inidia,0,",",".").'</td>
									</tr>
								';
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
			</div>
		</div><!-- /.page-content -->
	</div>
</div>