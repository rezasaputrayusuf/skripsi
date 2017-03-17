<?php 
	// include database and object files
	spl_autoload_register(function ($class) {
        include 'model/' . $class . '.php';
    });
	 
	// instantiate database class
	$database = new Database();
	$db = $database->getConnectionMysqli();
	
	$unit = new Unit($db);
	$units = $unit->readAll();
	
	$unitid = isset($_POST['unitid']);
	$level = isset($_POST['level']);
	
	$ruangan = new Ruangan($db);
	if($unitid!=0){
		$ruangans->unit = $unitid;
		$ruangans->level = $level;
	}
	$datas = $ruangan->Pilih();
	
	$siswa = new Siswa($db);
	$siswa->id = $id;
	$data = $siswa->readOne();
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
						Update Naik Kelas
					</div>
					<hr>
					<div>
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/edit.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<br>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Unit </label>
										<div class="col-sm-9">
											<select name="kelas">
												<option onchange="unit()">Unit</option>
												<?php
													foreach($datas as $row){
													extract($row);
												?>
												<option value="<?=$unit?>"><?=$unit?></option>
												<?php }
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kelas </label>
										<div class="col-sm-9">
											<select name="kelas">
												<option>Kelas</option>
												<?php
													foreach($datas as $row){
													extract($row);
												?>
												<option value="<?=$level?>"><?=$level?></option>
												<?php }
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ruangan </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="nama" class="col-xs-10 col-sm-9" />
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

<script>
function unit(){
	$.ajax{
		
	}
}
</script>

