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
	$wali = new Wali($db);
	$wali->id = $id;
	$data = $wali->readOne();
	extract($data);
?>
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="/">Home</a>
				</li>
				<li class="active">Orang Tua/Wali</li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
					<span class="input-icon">
						<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
						<i class="ace-icon fa fa-search nav-search-icon"></i>
					</span>
				</form>
			</div><!-- /.nav-search -->
		</div>

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
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Data Oang Tua
						
					</div>

					<div>
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_edit.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<input type="hidden" class="form-control" name="id" value="<?=$id?>">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Ayah </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nama" name="nama_ayah" value="<?=$nama_ayah?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pekerjaan Ayah </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan" name="pekerjaan_ayah" value="<?=$pekerjaan_ayah?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Ibu </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nama" name="nama_ibu" value="<?=$nama_ibu?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pekerjaan Ibu </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan" name="pekerjaan_ibu" value="<?=$pekerjaan_ibu?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
								<hr>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>
									<div class="col-sm-9">
										<textarea type="text" id="form-field-1" placeholder="Nama"  name="alamat" value="" class="col-xs-10 col-sm-5"><?=$alamat?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor Telfon </label>
									<div class="col-sm-9">
										<input type="text" id="form-field-1" placeholder="Pekerjaan"  name="no_telfon" value="<?=$no_telfon?>" class="col-xs-10 col-sm-5" />
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


