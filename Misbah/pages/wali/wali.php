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
	$wali = new Wali($db);
	$data = $wali->readAll();
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
						Orang Tua/Wali
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="row">
					<div class="col-xs-12">
						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>
						<div class="table-header" id="table-header">
							Data Oang Tua
							
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
										<th>No</th>
										<th>Nama Ayah</th>
										<th>Pekerjaan Ayah</th>
										<th>Nama Ibu</th>
										<th>Pekerjaan Ibu</th>
										<th>Alamat</th>
										<th>Nomor Telfon</th>
										<th>Aksi</th>
									</tr>
								</thead>

								<tbody>
									 <?php 
									foreach($data as $row) {
										extract($row);
										$no++;
									// ?>
									<tr>

										<td><?=$no?></td>
										<td><?=$nama_ayah?></td>
										<td><?=$pekerjaan_ayah?></td>
										<td><?=$nama_ibu?></td>
										<td><?=$pekerjaan_ibu?></td>
										<td><?=$alamat?></td>
										<td><?=$no_telfon?></td>


										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="?p=<?=$page?>-edit-<?=$id?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="?p=<?=$page?>-delete-<?=$id?>" onclick="return confirm(`Are you sure?`)">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>
									<?php } ?>

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
			</div><!-- /.col -->
		</div><!-- /.page-content -->
	</div>
</div>

<?php
	}
?>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
