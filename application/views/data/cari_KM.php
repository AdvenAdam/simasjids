<?php
error_reporting(0);
?>
<head>
	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/atlantis.min.css">
	<script src="<?= site_url('assets/assets/ckeditor/') ;?>ckeditor.js"></script>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/demo.css">
</head>
<div class="row">
	<div class="col-md-9">
		<div class="container">
			<center>
				<h1><b>Laporan Perbulan</b></h1>
				<hr>
			</center>
			<table id="basic-datatables" class="display table table-striped table-hover" >
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Uraian</th>
						<th>Penerimaan</th>
						<th>Pengeluaran</th>
						<th>Saldo</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach($cari as $a) :
						?>
						<?php 
						$saldo += $a->masuk - $a->keluar;
						$saldo1 +=$a->masuk;
						$saldo2 +=$a->keluar;
						?> 
						<tr>
							<td><?= $no++ ;?></td>
							<td><?= $a->tgl;?></td>
							<td><?= $a->uraian_km ;?></td>
							<td>Rp. <?= number_format($a->masuk) ;?></td>
							<td>Rp. <?= number_format($a->keluar) ;?></td>
							<td>Rp.<?= number_format($saldo) ;?></td>
						</tr>
					<?php endforeach ;?>

				</tbody>
				<tr>
					<th colspan="3"><center><h2>Total</h2></center></th>
					<th><b><h2>Rp.<?= number_format($saldo1) ;?></h2></b></th>
					<th><b><h2>Rp.<?= number_format($saldo2) ;?></h2></b></th>
					<td colspan="2"><b><h2>Rp.<?= number_format($saldo) ;?></h2></b></td>
				</tr>
			</table>
		</div>  
	</div>
</div>
<script>
	window.print();
</script>
