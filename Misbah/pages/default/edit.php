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
									<th width="50">No</th>
									<th>Item Tagihan</th>
									<th>Tahun</th>
								</tr>
							</thead>

							<tbody>
							<?php 
							$no = 0;
								foreach($defs as $row) {
									extract($row);
									$no++;
									$tahuns = $tahun +1;
									echo '
								<tr>
									<td>'.$no.'</td>
									<td>'.$item_tagihan.'</td>
									<td>'.$tahun.'-'.$tahuns.'</td>
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
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_edit.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<input type="hidden" class="form-control" name="id" value="<?=$id?>">
							
							<div class="row">
								<div class="col-md-6">
									<div class="control-group">
										<label class="control-label bolder ">Checklist Item Pembayaran Tambahan</label>
										<?php 
										foreach($data2 as $row) {
											extract($row);
										?>
											<div class="checkbox">
												<label>
													<input type="hidden" class="form-control" name="masa" value="<?=$masa?>">
													<input class="ace ace-checkbox-2" type="checkbox" id="item_bayar[]" name="item_bayar[]" value="<?php echo $item_bayar;?>">
													<span class="lbl"> <?php echo $item_bayar;?></span>
												</label>
											</div>
										<?php } ?>
									</div>
								</div>	
							</div>
							<hr>
							
							<div class="clearfix form-actions">
								<div class="col-md-offset-3 col-md-9">
									<button class="btn btn-info" type="submit">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Submit
									</button>

									&nbsp; &nbsp; &nbsp;
									<button class="btn" type="reset">
										<i class="ace-icon fa fa-undo bigger-110"></i>
										Reset
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /.page-content -->
	</div>
</div>