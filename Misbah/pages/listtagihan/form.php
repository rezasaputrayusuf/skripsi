<?php
	spl_autoload_register(function ($class) {
		include 'model/' . $class . '.php';
	});
 
	$database = new Database();
	$db = $database->getConnectionMysqli();
	
	$level = new Ruangan($db);
	$data1 = $level->readAll();
	
	$siswa = new Siswa($db);
	$data = $siswa->readAll();
	
	
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

					<div>
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_tambah1.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<br>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Level </label>
										<div class="col-sm-9">
											<select name="kelas">
												<option>Pilih Kelas</option>
												<?php
													foreach($data1 as $row){
													extract($row);
												?>
												<option value="<?=$level?>"><?=$level?></option>
												<?php }
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ruang </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="ruang" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="nama" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
										
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Item Tagihan </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder=""  name="item_tagihan" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bulan </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder=""  name="bulan" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tahun </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder=""  name="tahun" class="col-xs-10 col-sm-9" />
										</div>
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


