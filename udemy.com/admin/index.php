<?php $page = 'index' ?>
<?php require_once 'libraries/function.php'; 
	session_start();
	if(!isset($_SESSION['admin_name'])){
		echo "<script>alert('Bạn chưa đăng nhập!'); location.href='login/index.php'</script>";
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Trang chủ</title>
		
		<!-- Switchery css -->
		<link href="public/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
		
		<!-- Bootstrap CSS -->
		<link href="public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="public/assets/css/style.css" rel="stylesheet" type="text/css" />
		
		
		
	</head>
	<body class="adminbody">
		<div id="main">
			<!-- top bar navigation -->
			<div class="headerbar">
				<!-- LOGO -->
				<div class="headerbar-left">
					<a href="<?php echo get_url() ?> " class="logo"><img alt="logo" src="public/assets/images/kmt.png" /> <span>Admin</span></a>
				</div>
				<nav class="navbar-custom">
					<ul class="list-inline float-right mb-0">
						
						
						
						<li class="list-inline-item dropdown notif">
							<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<img src="public/assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
							</a>
							<div class="dropdown-menu dropdown-menu-right profile-dropdown">
								<!-- item-->
								<div class="dropdown-item noti-title">
									<h5 class="text-overflow"><small>Hello, Admin</small> </h5>
								</div>
								
								<!-- item-->
								<a href="http://localhost/udemy.com/admin/login/dang-xuat.php" class="dropdown-item notify-item">
									<i class="fa fa-power-off"></i> <span>Đăng xuất</span>
								</a>
								
							</div>
						</li>
					</ul>
					<ul class="list-inline menu-left mb-0">
						<li class="float-left">
							<button class="button-menu-mobile open-left">
							<i class="fa fa-fw fa-bars"></i>
							</button>
						</li>
					</ul>
				</nav>
			</div>
			<!-- End Navigation -->
			
			
			<!-- Left Sidebar -->
			<div class="left main-sidebar">
				
				<div class="sidebar-inner leftscroll">
					<div id="sidebar-menu">
						
						<ul>
							<li class="submenu">
								<a href="<?php echo get_url() ?>" class=" <?php echo (isset($page) && $page =='index')?'active':''?> "><i class="fa fa-fw fa-dashboard"></i><span> Trang điều khiển </span> </a>
							</li>
							

							<li class="submenu">
								<a href="<?php echo get_url().'course/' ?>" class=" <?php echo (isset($page) && $page =='news')?'active':''?>"><i class="fa fa-fw fa-area-chart"></i><span> Danh sách khóa học </span> </a>
							</li>
							
						</ul>
						<div class="clearfix"></div>
					</div>
					
					
				</div>
			</div>
		
		<!-- content -->
		<div class="content-page">
			
			<!-- Start content -->
			<div class="content">
				
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Trang chủ</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Trang chủ</li>
									<li class="breadcrumb-item active">Trang điều khiển</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->
					
					
					
					
					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							
							<div class="card mb-3">
								
								<h3>Chào mừng bạn đến với trang quản trị
								
							</div>
							<!-- end card -->
						</div>
						<!-- end col -->
						
					</div>
					<!-- end row -->
				</div>
				<!-- END container-fluid -->
			</div>
			<!-- END content -->
		</div>
		<!-- END content-page -->
			<footer class="footer">
				<span class="text-right">
					Copyright &copy; 2019
				</span>
				<span class="float-right">
					Powered by <a  href=""><b>Bắc Admin</b></a>
				</span>
			</footer>
		</div>
		<!-- END main -->
		
		
		<script src="public/assets/js/jquery.min.js"></script>
		
		
		<script src="public/assets/js/bootstrap.min.js"></script>
		
		

		
		
	</body>
</html>
			