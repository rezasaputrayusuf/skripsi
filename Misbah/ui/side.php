<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>

	<!-- /.sidebar-shortcuts -->
	<?php if($_SESSION['user']=="kasir" || $_SESSION['user']=="admin"){
		?>
	<ul class="nav nav-list">
		<li class="<?php if($page==null || $page=="home") { echo 'active'; } ?>">
			<a href="?p=home">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="<?php if($page=="default") { echo 'active'; } ?>">
			<a href="?p=default">
				<i class="menu-icon fa fa-desktop"></i>
				Default Pembayaran
			</a>

			<b class="arrow"></b>
		</li>
				
		<li class="<?php if($page=="bayar" || $page=="jurnalumum" || $page=="barang") { echo 'open active'; } ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">
					Transaksi
				</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="<?php if($page=="bayar") { echo 'active'; } ?>">
					<a href="?p=bayar">
						<i class="menu-icon fa fa-caret-right"></i>
						Pembayaran Siswa
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
			<ul class="submenu">
				<li class="<?php if($page=="jurnalumum") { echo 'active'; } ?>">
					<a href="?p=jurnalumum-add">
						<i class="menu-icon fa fa-caret-right"></i>
						Jurnal Umum
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
			<ul class="submenu">
				<li class="<?php if($page=="barang") { echo 'active'; } ?>">
					<a href="?p=barang">
						<i class="menu-icon fa fa-caret-right"></i>
						ATK Kas Kecil
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="<?php if($page=="listtagihan" || $page=="gl" || $page=="jurnal" || $page=="bukubesar" || $page=="neraca" || $page=="laba" || $page=="aruskas") { echo 'open active'; } ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> Laporan </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="<?php if($page=="listtagihan" ) { echo 'open active'; } ?>">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>

						Tagihan 
						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="<?php if($page=="listtagihan") { echo 'active'; } ?>">
							<a href="?p=listtagihan">
								<i class="menu-icon fa fa-caret-right"></i>
								List Tagihan
							</a>

							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li class="<?php if($page=="gl") { echo 'active'; } ?>">
					<a href="?p=gl">
						<i class="menu-icon fa fa-caret-right"></i>
						General Ledger
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php if($page=="jurnal") { echo 'active'; } ?>">
					<a href="?p=jurnal">
						<i class="menu-icon fa fa-caret-right"></i>
						Jurnal
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php if($page=="bukubesar") { echo 'active'; } ?>">
					<a href="?p=bukubesar">
						<i class="menu-icon fa fa-caret-right"></i>
						Buku Besar
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php if($page=="aruskas") { echo 'active'; } ?>">
					<a href="?p=aruskas">
						<i class="menu-icon fa fa-caret-right"></i>
						Arus Kas
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php if($page=="neraca") { echo 'active'; } ?>">
					<a href="?p=neraca">
						<i class="menu-icon fa fa-caret-right"></i>
						Neraca
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php if($page=="laba") { echo 'active'; } ?>">
					<a href="?p=laba">
						<i class="menu-icon fa fa-caret-right"></i>
						Laba/Rugi
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li  class="<?php if($page=="guru") { echo 'active'; } ?>">
			<a href="?p=guru">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				Data Guru
			</a>

			<b class="arrow"></b>
		</li>
		<li class="<?php if($page=="wali" || $page=="siswa" || $page=="siswanon" ) { echo 'open active'; } ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text"> Data Siswa</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				

				<li class="<?php if($page=="siswa") { echo 'active'; } ?>">
					<a href="?p=siswa">
						<i class="menu-icon fa fa-caret-right"></i>
						Siswa
					</a>

					<b class="arrow"></b>
				</li>
				<li  class="<?php if($page=="siswanon") { echo 'active'; } ?>">
					<a href="?p=siswanon">
						<i class="menu-icon fa fa-caret-right"></i>
						Siswa Non Aktif
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		
		
		<li  class="<?php if($page=="siswatemp") { echo 'active'; } ?>">
			<a href="?p=siswatemp">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				Pendaftaran Siswa 
			</a>

			<b class="arrow"></b>
		</li>
		<li class="<?php if($page=="ta" || $page=="item" || $page=="unit" || $page=="ruang") { echo 'open active'; } ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-cogs"></i>
				<span class="menu-text"> Pengaturan Sistem </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<!--
				<li class="<?php //if($page=="ta") { echo 'active'; } ?>">
					<a href="?p=ta">
						<i class="menu-icon fa fa-caret-right"></i>
						Pengaturan Tahun Ajaran
					</a>

					<b class="arrow"></b>
				</li>
				-->
				<li class="<?php if($page=="item") { echo 'active'; } ?>">
					<a href="?p=item">
						<i class="menu-icon fa fa-caret-right"></i>
						Pengaturan Item Tagihan
					</a>

					<b class="arrow"></b>
				</li>
				
				<li class="<?php if($page=="unit") { echo 'active'; } ?>">
					<a href="?p=unit">
						<i class="menu-icon fa fa-caret-right"></i>
						Pengaturan Unit
					</a>

					<b class="arrow"></b>
				</li>

				<li class="<?php if($page=="ruang") { echo 'active'; } ?>">
					<a href="?p=ruang">
						<i class="menu-icon fa fa-caret-right"></i>
						Pengaturan Ruangan
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>
	</ul><!-- /.nav-list -->
	<?php } else if($_SESSION['user']=="keuangan" ||$_SESSION['user']=="direktur" ) { ?>
	<ul class="nav nav-list">	
		<li class="<?php if($page==null || $page=="home") { echo 'active'; } ?>">
			<a href="?p=home">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="<?php if($page=="bayar" || $page=="jurnalumum" || $page=="pengeluaran") { echo 'open active'; } ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">
					Transaksi
				</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="<?php if($page=="bayar") { echo 'active'; } ?>">
					<a href="?p=bayar">
						<i class="menu-icon fa fa-caret-right"></i>
						Pembayaran Siswa
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
			<ul class="submenu">
				<li class="<?php if($page=="jurnalumum") { echo 'active'; } ?>">
					<a href="?p=jurnalumum-add">
						<i class="menu-icon fa fa-caret-right"></i>
						Jurnal Umum
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
			<ul class="submenu">
				<li class="<?php if($page=="barang") { echo 'active'; } ?>">
					<a href="?p=barang">
						<i class="menu-icon fa fa-caret-right"></i>
						ATK Kas Kecil
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="<?php if($page=="listtagihan" || $page=="jurnal" || $page=="bukubesar" || $page=="neraca" || $page=="laba" || $page=="aruskas") { echo 'open active'; } ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> Laporan </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="<?php if($page=="listtagihan" ) { echo 'open active'; } ?>">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>

						Tagihan 
						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="<?php if($page=="listtagihan") { echo 'active'; } ?>">
							<a href="?p=listtagihan">
								<i class="menu-icon fa fa-caret-right"></i>
								List Tagihan
							</a>

							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li class="<?php if($page=="gl") { echo 'active'; } ?>">
					<a href="?p=gl">
						<i class="menu-icon fa fa-caret-right"></i>
						General Ledger
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php if($page=="jurnal") { echo 'active'; } ?>">
					<a href="?p=jurnal">
						<i class="menu-icon fa fa-caret-right"></i>
						Jurnal
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php if($page=="bukubesar") { echo 'active'; } ?>">
					<a href="?p=bukubesar">
						<i class="menu-icon fa fa-caret-right"></i>
						Buku Besar
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php if($page=="aruskas") { echo 'active'; } ?>">
					<a href="?p=aruskas">
						<i class="menu-icon fa fa-caret-right"></i>
						Arus Kas
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php if($page=="neraca") { echo 'active'; } ?>">
					<a href="?p=neraca">
						<i class="menu-icon fa fa-caret-right"></i>
						Neraca
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php if($page=="laba") { echo 'active'; } ?>">
					<a href="?p=laba">
						<i class="menu-icon fa fa-caret-right"></i>
						Laba/Rugi
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
	</ul>
	<?php } ?>
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>