<?php 
			
	spl_autoload_register(function ($class) {
		include 'model/' . $class . '.php';
	});
 
	$database = new Database();
	$db = $database->getConnectionMysqli();
	
	$unit = new Unit($db);
	$units = $unit->readAll();
	
	$ruang = new Ruangan($db);
	$ruangs = $ruang->readAll();
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
						<form class="form-horizontal" role="form" action="pages/<?=$page?>/proses_tambah.php" method="post">
							<input type="hidden" class="form-control" name="page" value="<?=$page?>">
							<input type="hidden" class="form-control" name="act" value="<?=$act?>">
							<br>
							<div class="row">	
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status Masuk </label>
										<div class="col-sm-9">
											
											<select name="status_masuk">
												<option value="BARU">BARU</option>
												<option value="PINDAHAN">PINDAHAN</option>
											</select>
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
											<input type="text" id="form-field-1" placeholder="NISN" name="nisn" class="col-xs-10 col-sm-9" disabled/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor Induk </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nomor Induk" name="no_induk" class="col-xs-10 col-sm-9" disabled/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nama Siswa" name="nama" class="col-xs-10 col-sm-9" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Kelamin </label>
										<div class="col-sm-9">
											<input type="radio" id="form-field-1" name="jk" value="Laki-laki"  required/> Laki-laki &nbsp&nbsp&nbsp
											<input type="radio" id="form-field-1" name="jk" value="Perempuan"  required/> Perempuan
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat Lahir </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Tempat Lahir"  name="tmp_lahir" class="col-xs-10 col-sm-9" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Lahir </label>
										<div class="col-sm-9">
											<input type="date" id="form-field-1" placeholder="Tanggal Lahir"  name="tgl_lahir" class="col-xs-10 col-sm-9" max="2014-01-31" min="2004-01-31" required/>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Unit </label>
										<div class="col-sm-9">
											<select name="unit" id="unit" onchange="showUser(this.value)" required>
												<option value="">---------------</option>
												<?php
													foreach($units as $row){
												?>
													<option value="<?=$row['unit']?>"><?=$row['unit']?></option>
												<?php
												}
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Level </label>
										<div class="col-sm-9">
											<div class="col-sm-9" id="level">
											
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Ruangan </label>
										<div class="col-sm-9">
											<div class="col-sm-9" id="ruangan">
										
											</div>
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tahun Ajaran </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Tahun Ajaran"  name="ta" class="col-xs-10 col-sm-9" required/>
											<!-- 
											<select name="ta">
												<option value="">Tahun Ajaran</option>
												<option value=""></option>
											</select>
											-->
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Alamat </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Alamat"  name="alamat" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>	
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ayah </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Nama Ayah" name="ayah" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pekerjaan </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan" name="pekerjaan_a" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ibu </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Ibu" name="ibu" class="col-xs-10 col-sm-9" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pekerjaan </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Pekerjaan" name="pekerjaan_i" class="col-xs-10 col-sm-9" />
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

<script>
function unit() {
	location.reload(); 
}
</script>


<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("unit").innerHTML = "aaa";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("level").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","pages/siswatemp/getUnit.php?q="+str,true);
        xmlhttp.send();
		// console.log(#jum);
    }
}

function showLevel(str1) {
    if (str1 == "") {
        document.getElementById("level").innerHTML = "aaa";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ruangan").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","pages/siswatemp/getLevel.php?q="+str1,true);
        xmlhttp.send();
		// console.log(#jum);
    }
}
</script>
