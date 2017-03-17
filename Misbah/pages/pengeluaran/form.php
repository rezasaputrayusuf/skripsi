
<div class="main-content">
	<div class="main-content-inner">
		
		<div class="page-content">
			
			<div class="page-header">
				<h1>
					Dashboard
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Pengeluaran
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Input Pengeluaran
					</div>
					<hr>
					<div>
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_tambah.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Transaksi </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" value="<?=date('d-m-Y')?>" name="tgl_trans" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No. Transaksi</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" value="PKL" name="no_bukti" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Cara Bayar </label>
										<div class="col-sm-9">
											<select name="cara_bayar">
												<option value="cash">Cash</option>
												<option value="transfer">Transfer</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pembayaran </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="pembayaran" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jumlah </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="total" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="keterangan" class="col-xs-10 col-sm-9" />
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


