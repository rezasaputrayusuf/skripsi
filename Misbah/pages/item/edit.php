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
	$tagihan = new Tagihan($db);
	$tagihan->id = $id;
	$data = $tagihan->readOne();
	extract($data);
	
	$database = new Database();
	$db = $database->getConnectionMysqli();
	$coa = new Coa($db);
	$datasa = $coa->readAll();
?>
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="/">Home</a>
				</li>
				<li class="active">Item Tagihani</li>
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
						Item Tagihan
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Data Item Tagihan
						
					</div>

					<div>
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_edit.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<input type="hidden" class="form-control" name="id" value="<?=$id?>">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Item Tagihan</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="item_bayar" value="<?=$item_bayar?>" class="col-xs-10 col-sm-9" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Akun</label>
										<div class="col-sm-9">
											<select name="akun">
												<option value='<?=$akun?>'><?=$akun?></option>
											<?php
												foreach($datasa as $row) {
												extract($row);
													echo "<option value='$perkiraan'>$perkiraan</option>";
												}
											?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kelas</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="kelas" value="<?=$kelas?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Biaya</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="biaya" value="<?=$biaya?>" class="col-xs-10 col-sm-9" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sifat</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="sifat" value="<?=$sifat?>" class="col-xs-10 col-sm-9" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Masa Waktu</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="masa" value="<?=$masa?>" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="keterangan" value="<?=$keterangan?>" class="col-xs-10 col-sm-9" />
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


