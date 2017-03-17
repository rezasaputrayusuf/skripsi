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
	
	
	//panggil kelas item tagihan dengan query masa pangkal.
	//total jumlah uang
	
	$tagihan = new Tagihan($db);
	$data1 = $tagihan->uangPangkal();
	
	$siswa = new Siswatemp($db);
	$siswa->id = $id;
	$ids = $id;
	$data = $siswa->readOne();
	extract($data);
	
	$uang = new Pemasukan($db);
	$uang->id_siswa = $id;
	$datass = $uang->pangkal();
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
						Pembayaran Uang Pangkal <?=$nama?>	
					</div>
					<hr>
					<div>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr class="center">
									<th>No</th>
									<th>Pembayaran</th>
									<th>Jumlah</th>
									<th>Keterangan</th>
								</tr>
							</thead>

							<tbody>
							<?php 
							$no = 0;
							$jum = 0;
							$jums = 0;
							foreach($data1 as $uang){
								extract($uang);
								$no++;
									echo '
								<tr>
									<td>'.$no.'</td>
									<td>'.$item_bayar.'</td>
									<td>Rp. '.number_format($biaya,0,",",".").'</td>
									<td>'.$keterangan.'</td>
								</tr>';
								$jum += $biaya;
							}
							
							?>
							<tr>
								<td colspan=2 align='right'>Total</td>
								<td><?=number_format($jum,0,",",".")?></td>
								<td></td>
							</tr>
							<tr>
								<td colspan=2 align='right'>Sudah di Bayar</td>
								<td>
									<?php
										error_reporting(0);
										foreach($datass as $jumlah){
											extract($jumlah);
											$jums += $total;
										}
										echo number_format($jums,0,",",".");
										
									?>
								</td>
								<td></td>
							</tr>
							<tr>
								<td colspan=2 align='right'>Kurang Bayar</td>
								<td>
									<?php 
										$kur = $jum - $jums; echo number_format($kur,0,",",".");
									?>
								</td>
								<td>
									<?php 
										if($kur==0){
											// $uang->status=1;
											// $uang->update();
											echo "LUNAS";
										}
									?>
								</td>
							</tr>
							</tbody>
						</table>
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_edit.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<input type="hidden" class="form-control" name="ids" value="<?=$ids?>">
							<input type="hidden" class="form-control" name="status_masuk" value="<?=$status_masuk?>">
							<input type="hidden" class="form-control" name="nisn" value="<?=$nisn?>">
							<input type="hidden" class="form-control" name="no_induk" value="<?=$no_induk?>">
							<input type="hidden" class="form-control" name="nama" value="<?=$nama?>">
							<input type="hidden" class="form-control" name="jk" value="<?=$jk?>">
							<input type="hidden" class="form-control" name="tmp_lahir" value="<?=$tmp_lahir?>">
							<input type="hidden" class="form-control" name="tgl_lahir" value="<?=$tgl_lahir?>">
							<input type="hidden" class="form-control" name="unit" value="<?=$unit?>">
							<input type="hidden" class="form-control" name="level" value="<?=$level?>">
							<input type="hidden" class="form-control" name="ruangan" value="<?=$ruangan?>">
							<input type="hidden" class="form-control" name="ta" value="<?=$ta?>">
							<input type="hidden" class="form-control" name="alamat" value="<?=$alamat?>">
							<input type="hidden" class="form-control" name="ayah" value="<?=$ayah?>">
							<input type="hidden" class="form-control" name="pekerjaan_a" value="<?=$pekerjaan_a?>">
							<input type="hidden" class="form-control" name="ibu" value="<?=$ibu?>">
							<input type="hidden" class="form-control" name="pekerjaan_i" value="<?=$pekerjaan_i?>">
							<br>
							<div class="row">	
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pembayaran </label>
										<div class="col-sm-9">
											<input type="number" id="form-field-1" placeholder="Nominal" name="nominal" value="" class="col-xs-10 col-sm-9" min=3000000 required <?php  if($kur==0){ echo "readonly";}?>/>
											<input type="hidden" id="form-field-1" placeholder="" name="pangkal" value="<?=$jum?>" class="col-xs-10 col-sm-9" />
											<input type="hidden" id="form-field-1" placeholder="" name="status" value="<?=$kur?>" class="col-xs-10 col-sm-9" />
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



