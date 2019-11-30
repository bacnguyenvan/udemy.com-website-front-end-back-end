<?php require_once '../libraries/function.php' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Trang chủ</title>
		
		<!-- Switchery css -->
		<link href="../public/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
		
		<!-- Bootstrap CSS -->
		<link href="../public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="../public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="../public/assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<link rel="stylesheet" type="text/css" href="../public/css/style.css">
		<link rel="stylesheet" type="text/css" href="../public/jquery-confirm/jquery-confirm.css">
	</head>
	<body class="adminbody">
		<div id="main">
			<!-- top bar navigation -->
			<div class="headerbar">
				<!-- LOGO -->
				<div class="headerbar-left">
					<a href="<?php echo get_url() ?> " class="logo"><img alt="logo" src="../public/assets/images/kmt.png" /> <span>Admin</span></a>
				</div>
				<nav class="navbar-custom">
					<ul class="list-inline float-right mb-0">
						
						<li class="list-inline-item dropdown notif">
							<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<img src="../public/assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
							</a>
							<div class="dropdown-menu dropdown-menu-right profile-dropdown">
								<!-- item-->
								<div class="dropdown-item noti-title">
									<h5 class="text-overflow"><small>Hello, Admin</small> </h5>
								</div>
								<!-- item-->
								
								<!-- item-->
								<a href="<?php echo get_url().'login/dang-xuat.php' ?>" class="dropdown-item notify-item">
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