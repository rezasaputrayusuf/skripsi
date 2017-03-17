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
	
	$tagihan = new Defaults($db);
	$tagihan->siswa = $id;
	$data1 = $tagihan->bayaran();
	
	$siswa = new Siswa($db);
	$siswa->id = $id;
	$ids = $id;
	$data = $siswa->readOne();
	extract($data);
	
	// $uang = new Pemasukan($db);
	// $uang->id_siswa = $id;
	// $datass = $uang->pangkal();
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
						Pembayaran Tagihan <?=$nama?>	
					</div>
					<hr>
					
					<div>
					<form method="post" action="pages/<?=$page?>/proses_tambah.php">
					<h2>Tagihan Bulan Ini</h2>
						<table id="dynamic-tableS" class="table table-striped table-bordered table-hover">
							<thead>
								<tr class="center">
									<th>Pembayaran</th>
									<th>Bulan</th>
									<th>Jumlah</th>
									<th>Keterangan</th>
									<!--<th><input type="button" onclick="add_row();" value="ADD ROW"></th>-->
								</tr>
							</thead>

							<tbody>
								<tr id='row'>
									<input type="hidden" name="page" placeholder="Enter Name" value="<?=$page?>">
									<input type="hidden" name="ids" placeholder="Enter Name" value="<?=$id?>">
									<input type="hidden" name="user" placeholder="Enter Name" value="<?=$_SESSION['user']?>">
									<td id="item_bayar">
										<select name="pembayaran[]" onchange="showUser(this.value,<?=$level?>); Bulan(this.value,<?=$id?>)">
											<option value="">Pilih</option>
											<?php
											foreach($data1 as $a){
												extract ($a);
											echo "<option value='$item_tagihan'>$item_tagihan</option>";
											// echo "<input type='hidden' name='akun' value='$akun'>";
											}
											?>
										</select>
									</td>
									<td>
										<div id="bulan"></div>
									</td>
									<td>
										<input type="text" name="total[]" placeholder="Jumlah" value="" id="jum" readonly><p id="txtHint"></p>
									</td>
									<td>
											<input type="text" id="form-field-1" name="cara_bayar[]" value="cash"  readonly/>
										
									</td>
								</tr>
							</tbody>
						</table>
						<div class="clearfix form-actions">
								<div class="col-md-offset-3 col-md-9">
									<button class="btn btn-info" type="submit" >
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

<script type="text/javascript">
function add_row()
{
	 $rowno=$("#dynamic-table tr").length;
	 $rowno=$rowno+1;
	 $item_tagihan=0;
	 $row="<tr id='row"+$rowno+"'><td><input type='text' name='pembayaran[]' placeholder='Pembayaran'></td><td><select name='bulan[]'><option value=''>Pilih</option><option value='1'>Juli</option><option value='2'>Agustus</option><option value='3'>September</option><option value='4'>Oktober</option><option value='5'>November</option><option value='6'>Desember</option><option value='7'>Januari</option><option value='8'>Februari</option><option value='9'>Maret</option><option value='10'>April</option><option value='11'>Mei</option><option value='12'>Juni</option></select></td><td><input type='text' name='total[]' placeholder='Jumlah'></td><td><select name='cara_bayar[]'><option value='cash'>Cash</option><option value='transfer'>Transfer</option></select></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>";
	 $("#dynamic-table tr:last").after($row);
	 // $("#dynamic-table tr:last").after("");<select><option value=''>Pilih</option><option value='"+$item_tagihan+"'>"+$item_tagihan+"</option></select>
 }
function delete_row(rowno)
{
	$('#'+rowno).remove();
}

function showUser(str,str2) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
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
                document.getElementById("jum").value = this.responseText;
            }
        };
        xmlhttp.open("GET","pages/bayar/getbiaya.php?q="+str+"&r="+str2,true);
        xmlhttp.send();
		// console.log(#jum);
    }
}

function Bulan(a,b) {
    if (a == "") {
        document.getElementById("txtHint").innerHTML = "";
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
                document.getElementById("bulan").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","pages/bayar/getBulan.php?t="+a+"&u="+b,true);
        xmlhttp.send();
		// console.log(#jum);
    }
}
</script>