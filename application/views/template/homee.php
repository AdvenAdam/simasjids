	<br>
	<br>

	<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= 'Dashboard'; ?></h1>
<h1 class="h3 mb-4 text-gray-800"><?= 'Kas Masjid'; ?></h1>
<div class="row">

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Kas Masjid</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= number_format($masukKM['nominal']-$keluarKM['nominal']) ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-coins fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kas Masuk</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= number_format($masukKM['nominal']) ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-hand-holding-usd fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kas Keluar</div>
						<div class="row no-gutters align-items-center">
							<div class="col-auto">
								<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp <?= number_format($keluarKM['nominal']) ?></div>
							</div>

						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-hands fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlUser ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-users fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

<h1 class="h3 mb-4 text-gray-800"><?= 'Kas Sosial'; ?></h1>

<div class="row">

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Kas Sosial</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= number_format($masukKS['nominal']-$keluarKS['nominal']) ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-coins fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kas Masuk</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= number_format($masukKS['nominal']) ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-hand-holding-usd fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kas Keluar</div>
						<div class="row no-gutters align-items-center">
							<div class="col-auto">
								<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp <?= number_format($keluarKS['nominal']) ?></div>
							</div>

						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-hands fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Jadwal</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlJadwal ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-users fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->