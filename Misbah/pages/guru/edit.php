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
	$guru = new Guru($db);
	$guru->id = $id;
	$data = $guru->readOne();
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
						Guru
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Data Guru
					</div>
					<hr>
					<div>
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_edit.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<input type="hidden" class="form-control" name="id" value="<?=$id?>">
							<br>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIK </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="NIK" name="nik" value="<?=$nik?>" class="col-xs-10 col-sm-9" />
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
											<input type="radio" id="form-field-1" name="jk" value="Laki-laki" <?php if($jk=="Laki-laki"){echo "checked";}?> required/> Laki-laki &nbsp&nbsp&nbsp
											<input type="radio" id="form-field-1" name="jk" value="Perempuan" <?php if($jk=="Perempuan"){echo "checked";}?> required/> Perempuan
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Masuk </label>
										<div class="col-sm-9">
											<input type="date" id="form-field-1" placeholder="Tanggal Masuk"  name="tgl_masuk" value="<?=$tgl_masuk?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat Lahir </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Tempat Lahir "  name="tempat_lahir" value="<?=$tempat_lahir?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Lahir </label>
										<div class="col-sm-9">
											<input type="date" id="form-field-1" placeholder=" Tanggal Lahir "  name="tgl_lahir" value="<?=$tgl_lahir?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>
										<div class="col-sm-9">
											<textarea type="text" id="form-field-1" placeholder="Alamat"  name="alamat" value="<?=$alamat?>" class="col-xs-10 col-sm-9" ><?=$alamat?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gaji </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Gaji"  name="gaji" value="<?=$gaji?>" class="col-xs-10 col-sm-9" ><?=$gaji?>
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



