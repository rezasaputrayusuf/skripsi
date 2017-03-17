<?php 
	
	if($act=='add'){
		
		include "form.php";
	
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
	
	$pemasukan = new Pemasukan($db);
	$data = $pemasukan->readAll();
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
						Data Pemasukan
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Data Pemasukan
						
						<div class="pull-right">
							<a href="?p=<?=$page?>-add">
								<button class="btn btn-danger glyphicon-plus">Tambah Data</button>
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
								<tr>
									<th class="center">No</th>
									<th>Kode Transaksi</th>
									<th>Pembayaran</th>
									<th>Tanggal</th>
									<th>Cara Pembayaran</th>
									<th>Jumlah</th>
									<th>Penerima</th>
									<th>Aksi</th>
								</tr>
							</thead>

							<tbody>
							<?php 
								foreach($data as $row) {
									extract($row);
									$no++;
									echo '
								<tr>
									<td class="center">'.$no.'</td>
									<td>'.$no_bukti.'</td>
									<td>'.$pembayaran.'</td>
									<td>'.$tgl_trans.'</td>
									<td>'.$cara_bayar.'</td>
									<td>'.$total.'</td>
									<td>'.$penerima.'</td>
									
									<td>
										<div class="hidden-sm hidden-xs action-buttons">
											<a class="blue" href="#">
												<i class="ace-icon fa fa-search-plus bigger-130"></i>
											</a>

											<a class="green" href="?p='.$page.'-edit-'.$id.'">
												<i class="ace-icon fa fa-pencil bigger-130"></i>
											</a>

											<a class="red" href="?p='.$page.'-delete-'.$id.'" onclick="return confirm(`Are you sure?`)">
												<i class="ace-icon fa fa-trash-o bigger-130"></i>
											</a>
										</div>
									</td>
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
