<?php 
	
	if($act=='add'){
		
		include "form.php";
	
	}else if($act=='edit'){
		
		include "edit.php";
	
	}else if($act=='cetak'){
		
		include "cetak.php";
	
	}else if($act=='transaksi'){
		
		include "transaksi.php";
	
	}else if($act=='delete'){
		
		include "delete.php";
	
	}else{
		
	spl_autoload_register(function ($class) {
		include 'model/' . $class . '.php';
	});
 
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$siswa = new Siswa($db);
	$data = $siswa->readAll();
	$num = count($data);
	$no=0;
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
						Data Siswa
						
						
					</div>

					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
					<?php
						if($num>0){ ?>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr class="center">
									<th>Tagihan</th>
									<th>NISN</th>
									<th>No Induk</th>
									<th>Nama</th>
									<th>L/P</th>
									<th>Tmp Lahir</th>
									<th>Tgl Lahir</th>
									<th>Unit</th>
									<th>Level</th>
									<th>Ruangan</th>
									<th>Tahun Ajaran</th>
									<th>Alamat</th>	
								</tr>
							</thead>

							<tbody>
							<?php 
								foreach($data as $row) {
									extract($row);
									$no++;
									echo '
								<tr>
									
									<td>
										<a class="green" href="?p='.$page.'-transaksi-'.$id.'">
											<i class="ace-icon fa fa-pencil bigger-130">  Bayar</i>
										</a>
									</td>
									<td>'.$nisn.'</td>
									<td>'.$no_induk.'</td>
									<td>'.$nama.'</td>
									<td>'.$jk.'</td>
									<td>'.$tmp_lahir.'</td>
									<td>'.$tgl_lahir.'</td>
									<td>'.$unit.'</td>
									<td>'.$level.'</td>
									<td>'.$ruangan.'</td>
									<td>'.$ta.'</td>
									<td>'.$alamat.'</td>
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

<?php
	}
?>
