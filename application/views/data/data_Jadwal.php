<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
<?php endif; ?>
<div class="page-header">
	<h4 class="page-title">Data Jadwal</h4>
	<ul class="breadcrumbs">
		<li class="nav-home">
			<a href="<?= site_url('home/halaman');?>">
				<i class="flaticon-home" style="font-size:20px;"></i>
			</a>
		</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<a href="<?= site_url('Jadwal/tambahJadwal') ;?>" class="btn btn-primary"><i class="fa fa-plus"></i></i>Tambah Jadwal</a>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="basic-datatables" class="display table table-striped table-hover" >
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Acara</th>
								<th>Tempat</th>
								<th>Tanggal</th>
								<th>Waktu</th>
								<th>Deskripsi</th>			
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=1;
							foreach($Jadwal as $a) :
								?>
								<tr>
									<td><?= $no++ ;?></td>
									<td><?= $a->nama_jadwal ;?></td>
									<td><?= $a->tempat ;?></td>
									<td><?= $a->tanggal ;?></td>
									<td><?= $a->waktu ;?></td>
									<td><?= $a->deskripsi_jadwal ;?></td>
									<td>
									<a href="<?= site_url('Jadwal/editJadwal/').$a->id_jadwal;?>" class="btn btn-small text-primary" width="300px" height="400px"><i class="fas fa-edit"></i></a>
										<a onclick="deleteConfirm('<?= site_url('Jadwal/hapusJadwal/'.$a->id_jadwal) ;?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
							<?php endforeach ;?>
						</tbody>
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