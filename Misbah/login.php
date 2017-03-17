<?php 
//error_reporting(0);
// require 'core/init.php';
// $general->logged_in_protect();
// // print_r($db);

// if (empty($_POST) === false)
// {	$username = $_POST['username']; 
	// $password = $_POST['password']; 
	// if (empty($username) === true || empty($password) === true) {
		// $errors[] = 'Sorry, but we need your username and password.';
	// } else if ($users->user_exists($username) === false) {
		// $errors[] = 'Sorry, that username doesn\'t exists. Please try again.';
	// } 
	// else
	// {	
		// $login = $users->login($username, $password);
		// if ($login === false) {
			// $errors[] = 'Sorry, that username/password is invalid. Please try again.';
		// }else {
			// $_SESSION['loginid'] =  $login;
			// echo $login;
			//header('location: home.php');
			// exit();
		// }
	// }
// } 

	// $username = $_POST['username'];
	// $password = sha1($_POST['password']); 
	
	// spl_autoload_register(function ($class) {
		// include 'model/' . $class . '.php';
	// });
	// session_start();
	// $database = new Database();
	// $db = $database->getConnectionMysqli();
	// if($username!=0){
		// $login = new Login($db);
		// $login->username = $username;
		// $login->password = $password;
		// $data = $login->logged_in();
	// }
	
	// if($_SESSION['login'] == TRUE){
		// echo "<script>window.location.href='home.php'</script>";
	// }
	
	include_once "conn.php";
	error_reporting(0);
	if(isset($_POST['LOGIN'])) {
		$user = $_POST['username'];
		$pass =sha1($_POST['password']);
		// echo $user;
		if(empty($user) OR empty($pass)) {
			echo "<script>alert('Form tidak boleh kosong')</script>";
		} else {
			$sql = mysql_query("SELECT * FROM users WHERE username='$user' AND password='$pass'");
			echo $sql;
			$r = mysql_fetch_array($sql);
			$ketemu = mysql_num_rows($sql);
			if($ketemu>0) {
				session_start();
				$_SESSION['login'] = TRUE;
				$_SESSION['user'] = $user;
				echo "<script>alert('Berhasil Login'); window.location.href='home.php';</script>";
				// header("Location: home.php");
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}
	}

	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>SI Keuangan Misbahussudur</title>
		<?php include "ui/lib.php"; ?>
		
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">SI</span>
									<span class="white" id="id-text2">Keuangan</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Yayasan Misbahussudur</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Login
											</h4>

											<div class="space-6"></div>

											<form method="post" action="login.php">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<input name="LOGIN" type="hidden"/>

														<button type="button submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													
													
												</a>
											</div>

											
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="template/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='template/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			$('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
