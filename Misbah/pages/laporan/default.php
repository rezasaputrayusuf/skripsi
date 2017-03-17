<?php 
	
	if($act=='add'){
		
		include "proses_tambah.php";
		//include "form.php";
	
	}else if($act=='edit'){
		
		include "edit.php";
	
	}else if($act=='delete'){
		
		include "delete.php";
	
	}else{
		
	spl_autoload_register(function ($class) {
		include 'model/' . $class . '.php';
	});
 
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$tagihan = new Defaults($db);
	$data = $tagihan->readAll();
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
						
						<div class="pull-right">
							<a href="?p=<?=$page?>-add">
								<button class="btn btn-danger glyphicon-plus"> Refresh Page</button>
							</a>
						</div>
					</div>

					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
					<?php
						if($num>0){ ?>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr class="center">
									<th>Aksi</th>
									<th>NISN</th>
									<th>Nama</th>
									<th>Unit</th>
									<th>Kelas</th>
									<th>Ruangan</th>
									<th>Tagihan Belum di Bayar</th>
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
										<div class="hidden-sm hidden-xs action-buttons">
											<a class="green" href="?p='.$page.'-edit-'.$siswa.'">
												<i class="ace-icon fa fa-pencil bigger-130"> Detail</i>
											</a>

										</div>
									</td>
									
									<td>'.$id.'</td>
									<td>'.$nama.'</td>
									<td>'.$unit.'</td>
									<td>'.$level.'</td>
									<td>'.$ruangan.'</td>
									<td>'.$total.' Point</td>
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
