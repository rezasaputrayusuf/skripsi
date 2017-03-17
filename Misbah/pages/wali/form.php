
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
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Data Oang Tua
					</div>
					<hr>
					<div>
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_tambah.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Ayah </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nama Ayah" name="nama_ayah" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pekerjaan Ayah </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan Ayah" name="pekerjaan_ayah" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Ibu </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nama Ibu" name="nama_ibu" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pekerjaan Ibu </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan Ibu" name="pekerjaan_ibu" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>
										<div class="col-sm-9">
											<textarea type="text" id="form-field-1" placeholder="Alamat"  name="alamat" class="col-xs-10 col-sm-9"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor Telfon </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nomor Telepon"  name="no_telfon" class="col-xs-10 col-sm-9" />
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


