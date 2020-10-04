<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
<?php endif; ?>
<div class="page-header">
	<h4 class="page-title">Data Kas Masjid</h4>
	<ul class="breadcrumbs">
		<li class="nav-home">
			<a href="<?= site_url('home/halaman');?>">
				<i class="flaticon-home" style="font-size:20px;"></i>
			</a>
		</li>
	</ul>
</div>
<div class="row">
 	<div class="col-md-4">
 		<div class="form-group">
 			<a href="<?= site_url('Kas/pemasukanKM') ;?>" class="btn btn-success"><i class="fas fa-plus"></i>Pemasukan</a>
 			<a href="<?= site_url('Kas/pengeluaranKM') ;?>" class="btn btn-primary"><i class="fas fa-plus"></i>Pengeluaran</a>
 		</div>
 	</div>
 	
 </div>


 <div class="row">
 	<div class="col-md-12">
 		<div class="card">
 			<div class="card-header">
 				<form action="<?= site_url('Kas/cariKM') ;?>" method="POST" enctype="multipart/form-data">
 					<div class="input-group mb-3">
 						<div class="input-group-prepend">
 							<span class="input-group-text">Cetak Laporan Dari </span>
 						</div>
 						<input type="date" name="tgl_awal" class="form-control">
						 <div class="input-group-prepend">
 							<span class="input-group-text">Cetak laporan Sampai</span>
 						</div>
						<input type="date" name="tgl_akhir" class="form-control">
 						<input type="submit" class="btn btn-success" name="cari" value="Cetak">
 					</div>
 				</form>
 			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="basic-datatables" class="display table table-striped table-hover" >
						<thead>
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Uraian</th>
								<th>Penerimaan</th>
								<th>Pengeluaran</th>
								<th>Saldo</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=1; 
							foreach($KM as $a) :
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
									<td>
										<a href="<?= site_url('Kas/editKM/').$a->id_km;?>" class="btn btn-small text-primary" width="300px" height="400px"><i class="fas fa-edit"></i></a>
										<a onclick="deleteConfirm('<?php echo site_url('Kas/hapusKM/'.$a->id_km) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
									</td>
								<?php endforeach ;?>
							</tr>
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
	</div>
</div>
<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>
<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
			</div>
		</div>
	</div>
</div>