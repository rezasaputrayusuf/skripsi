<?php 
	// include database and object files
	spl_autoload_register(function ($class) {
        include 'model/' . $class . '.php';
    });
	 
	// instantiate database class
	$database = new Database();
	$db = $database->getConnectionMysqli();
	 
	$coa = new Coa($db);
	$data1 = $coa->readAll();
	
	$jurnal = new Jurnal($db);
	$data2 = $jurnal->readAll();
	foreach($data2 as $da){
	$id_jurnal = $da['id']+1;
	}
	
	$bb = new Coa($db);
	$data = $bb->readAll();
	$num = count($data);
	// session_start();
?>

<div class="main-content">
	<div class="main-content-inner">
		
		<div class="page-content">
			
			<div class="page-header">
				<h1>
					Dashboard
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Pemasukan
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Input Transaksi
					</div>
					<hr>
					<div>
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_tambah.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<input type="hidden" value="<?=$id_jurnal?>" name="id_jurnal" class="col-xs-10 col-sm-9" />
							<input type="hidden" name="user" placeholder="Enter Name" value="<?=$_SESSION['user']?>">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Transaksi </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" value="<?=date('d-m-Y')?>" name="tgl_trans" class="col-xs-10 col-sm-9" readonly/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No. Transaksi</label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" value="<?=$id_jurnal?>" name="no_bukti" class="col-xs-10 col-sm-9" readonly/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Cara Bayar </label>
										<div class="col-sm-9">
											<input type="radio" id="form-field-1" name="cara_bayar" value="cash"  required/>Cash &nbsp&nbsp&nbsp
											<input type="radio" id="form-field-1" name="cara_bayar" value="transfer"  required/> Transfer
										
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deskripsi </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" name="keterangan" class="col-xs-10 col-sm-9" />
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-sm-9">
											<input type="hidden" id="form-field-1" placeholder="" value="admin" name="penerima" class="col-xs-10 col-sm-9" readonly/>
										</div>
									</div>
										<h2>Jurnal Detail</h2>
											<table id="" class="table table-striped table-bordered table-hover">
												<thead>
													<tr class="center">
														<th>Akun</th>
														<th>Debit</th>
														<th>Kredit</th>
													</tr>
												</thead>

												<tbody>
													<tr id='row'>
														<td id="item_bayar">
															<select name="akun">
																<option value="">Pilih</option>
																<?php
																foreach($data1 as $a){
																	extract ($a);
																echo "<option value='$id'>$perkiraan</option>";
																// echo "<input type='hidden' name='akun' value='$akun'>";
																}
																?>
															</select>
														</td>
														<td><input type="text" name="debit" placeholder="Jumlah"></td>
														<td><input type="text" name="kredit" placeholder="Jumlah"></td>
														</td>
													</tr>
													<tr id='row'>
														<td id="item_bayar">
															<select name="akun1">
																<option value="">Pilih</option>
																<?php
																foreach($data1 as $a){
																	extract ($a);
																echo "<option value='$id'>$perkiraan</option>";
																// echo "<input type='hidden' name='akun' value='$akun'>";
																}
																?>
															</select>
														</td>
														<td><input type="text" name="debit1" placeholder="Jumlah"></td>
														<td><input type="text" name="kredit1" placeholder="Jumlah"></td>
														</td>
													</tr>
												</tbody>
											</table>
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
								<div class="col-md-6">
									<?php
										if($num>0){ ?>
										<table id="dynamic-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>Nama Akun</th>
													<th>Saldo</th>
												</tr>
											</thead>

											<tbody>
											<?php 
											$no =1;
												$state = "";
												foreach($data as $row) {
													extract($row);
													
													if($state==""){
															$state=$keterangan;
															echo '
															<tr>
																<th colspan=4>'.$state.'</td>
															</tr>';
													}else{
													if($keterangan!=$state){
														$state=$keterangan;
														echo '
														<tr>
															<th colspan=4>'.$state.'</td>
														</tr>';
														
													}}
													echo '
													<tr>
														<td class="">'.$perkiraan.'</td>
														<td>Rp. '.number_format($saldo,0,",",".").'</td>
													</tr>';
													$no++;
													
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
							</div>
								<div class="clearfix form-actions">
									
								</div>
								
							</form>
					</div>
				</div>
			</div>
		</div><!-- /.page-content -->
	</div>
</div>


