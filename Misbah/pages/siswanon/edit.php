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
	$siswa = new Siswa($db);
	$siswa->id = $id;
	$data = $siswa->readOne();
	extract($data);
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
					<hr>
					<div>
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_edit.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<input type="hidden" class="form-control" name="id" value="<?=$id?>">
							<br>
							<div class="row">	
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status Masuk </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nama" name="status_masuk" value="<?=$status_masuk?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NISN </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan" name="nisn" value="<?=$nisn?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor Induk </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nama" name="no_induk" value="<?=$no_induk?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nama" name="nama" value="<?=$nama?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Kelamin </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Jenis Kelamin"  name="jk" value="<?=$jk?>" class="col-xs-10 col-sm-9">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat Lahir </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Tempat Lahir"  name="tmp_lahir" value="<?=$tmp_lahir?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Lahir </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Tanggal Lahir"  name="tgl_lahir" value="<?=$tgl_lahir?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Unit </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan"  name="unit" value="<?=$unit?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Level </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan"  name="level" value="<?=$level?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Ruangan </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan"  name="ruangan" value="<?=$ruangan?>"  class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tahun Ajaran </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan"  name="ta" value="<?=$ta?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Alamat </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan"  name="alamat" value="<?=$alamat?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label bolder ">Checklist Item Pembayaran</label>

										<div class="checkbox">
											<label>
												<input name="form-field-checkbox" type="checkbox" class="ace" />
												<span class="lbl"> Antar Jemput</span>
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input name="form-field-checkbox" type="checkbox" class="ace" />
												<span class="lbl"> Catering</span>
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox" />
												<span class="lbl"> Ekstrakurikuler</span>
											</label>
										</div>
									</div>
								</div>	
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Orang Tua </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan"  name="ortu" value="<?=$ortu?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
							</div>
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



