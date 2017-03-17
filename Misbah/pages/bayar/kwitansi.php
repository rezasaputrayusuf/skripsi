<?php 
	// include database and object files
	spl_autoload_register(function ($class) {
        include 'model/' . $class . '.php';
    });
	 
	// instantiate database class
	$database = new Database();
	$db = $database->getConnectionMysqli();
	
	$siswa = new Siswa($db);
	$siswa->id = $_SESSION['ids'];
	$data = $siswa->readOne();
?>


<div class="main-content">
  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <i class="fa fa-leaf"></i> YAYASAN MISBAHUSSUDUR
              <small class="pull-right"></small>
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            
           
          </div><!-- /.col -->
          <div class="col-sm-4 invoice-col">
            
          </div><!-- /.col -->	
          <div class="col-sm-4 invoice-col">
		  <center><h1>KWITANSI</h1></center>
			</br>
            <table>
				<tr>
					<td><b>Nama Siswa</b></td>
					<td>&nbsp;&nbsp;:</td>
					<td>&nbsp; <?=$data['nama']?></td>
				</tr>
				<tr>
					<td><b>NISN</b></td>
					<td>&nbsp;&nbsp;:</td>
					<td>&nbsp; <?=$data['nisn']?></td>
				</tr>
				<tr>
					<td><b>No Induk</b></td>
					<td>&nbsp;&nbsp;:</td>
					<td>&nbsp; <?=$data['no_induk']?></td>
				</tr>
			</table>
          </div><!-- /.col -->
        </div><!-- /.row --></br>

		<?php 
			session_start();
		?>
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Pembayaran</th>
                  <th>Bulan</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?=$_SESSION['pembayaran']?></td>
                  <td><?=$_SESSION['bulan']?></td>
                  <td>Rp. <?php echo number_format($_SESSION['total'], 0,",",".");?></td>
                </tr>
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6"></br></br></br>
            
          </div><!-- /.col -->
          <div class="col-xs-6"></br></br></br>
            <p class="lead">
			
			</p>
            <div class="table-responsive">
              
			  <p class="lead" style="margin-left:60%">TTD<br><?=$_SESSION['user']?></p>
            </div>
          </div><!-- /.col -->	
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->
    <!-- AdminLTE App -->
    <script src="../../asset/dist/js/app.min.js" type="text/javascript"> setTimeout("window.close();", 3000);</script>
  </body>
 </div>