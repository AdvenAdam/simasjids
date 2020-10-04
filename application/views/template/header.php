<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title ;?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= site_url('assets/assets/') ;?>js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= site_url('assets/assets/') ;?>css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/atlantis.min.css">
	<script src="<?= site_url('assets/assets/ckeditor/') ;?>ckeditor.js"></script>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="light-blue2">
				
				<a href="index.html" class="logo">
					
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class=""></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="light-blue2">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= site_url('assets/assets/img/admin.png') ;?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?= site_url('assets/assets/img/admin.png') ;?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?= $user['nama_lengkap'] ;?></h4>
												<p class="text-muted"></p><a href="<?= site_url('User/logout_user') ;?>" class="btn btn-xs btn-secondary btn-sm">Logout</a>
											</div>
										</div>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= site_url('assets/assets/img/admin.png') ;?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $user['nama_lengkap'] ;?>
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="<?= site_url('User/logout_user') ;?>">
											<span class="link-collapse">Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="<?= site_url('home/halaman') ;?>" >
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class=""></span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Input Kas</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#KS">
								<i class="fas fa-pen-square"></i>
								<p>Input Data Kas Sosial</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="KS">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= site_url('Kas/pemasukanKS') ;?>">
											<span class="sub-item">Input Penerimaan</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('Kas/pengeluaranKS') ;?>">
											<span class="sub-item">Input Pengeluaran</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#KM">
								<i class="fas fa-pen-square"></i>
								<p>Input Data Kas Masjid</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="KM">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= site_url('Kas/pemasukanKM') ;?>">
											<span class="sub-item">Input Penerimaan</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('Kas/pengeluaranKM') ;?>">
											<span class="sub-item">Input Pengeluaran</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Master data</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
								<i class="fa fa-database"></i>
								<p>Data Master</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= site_url('Kas/dataKM') ;?>">
											<span class="sub-item">Data Kas Masjid</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('Kas/dataKS') ;?>">
											<span class="sub-item">Data Kas Sosial</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#charts">
								<i class="far fa-chart-bar"></i>
								<p>Grafik</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="charts">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= site_url('Kas/chart1') ;?>">
											<span class="sub-item">Kas Masjid</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('Kas/chart2') ;?>">
											<span class="sub-item">Kas Sosial</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Pengguna</h4>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('User/dataUser') ;?>">
								<i class="fa fa-child"></i>
								<p>Data User</p>
								<span class=""></span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Jadwal Acara</h4>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('Jadwal/dataJadwal') ;?>">
								<i class="fa fa-child"></i>
								<p>Jadwal Acara Masjid</p>
								<span class=""></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
        <!-- End Sidebar -->
        