
<fieldset>
    <div class="page-header">
		<h4 class="page-title">Input Jadwal Acara Masjid</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
                <a href="<?= site_url('Jadwal/tambahJadwal') ;?>" class=""><i class="fas fa-reply" style="font-size:30px;"></i></i></a>
			</li>
        </ul>
	</div>
    <form method="post" action="" class="form-horizontal">  
	<div class="form-group">
    	<label for="nama_jadwal" class="col-md-2">Nama Acara</label>
        <div class="col-md-4">
        <input type="text" name="nama_jadwal"  class="form-control" />
        </div>
        <?php echo form_error('nama_jadwal','<small class="text-danger pl-3">','</small>'); ?>
    </div>
    <div class="form-group">
    	<label for="tempat" class="col-md-2">Tempat Acara</label>
        <div class="col-md-4">
        <input type="text" name="tempat" class="form-control" />
        </div>
        <?php echo form_error('tempat','<small class="text-danger pl-3">','</small>'); ?>
    </div>
    <div class="form-group">
        <label for="tanggal" class="col-md-2">Tanggal Acara</label>
        <div class="col-md-4">
        <input type="date" name="tanggal" class="form-control" />
        </div>
        <?php echo form_error('tanggal','<small class="text-danger pl-3">','</small>'); ?>
    </div>
    <div class="form-group">
    	<label for="waktu" class="col-md-2">Waktu Acara</label>
        <div class="col-md-4">
        <input type="time" name="waktu" class="form-control" />
        </div>
        <?php echo form_error('waktu','<small class="text-danger pl-3">','</small>'); ?>
    </div>
    <div class="form-group">
    	<label for="deskripsi" class="col-md-2">Deskripsi Acara</label>
        <div class="col-md-4">
        <textarea class="form-control" name="deskripsi" row="3"></textarea> 
        </div>
        <?php echo form_error('deskripsi','<small class="text-danger pl-3">','</small>'); ?>
    </div>
    
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Tambah" class="btn btn-success">
        </div>
    </div>
    </form>
</fieldset>
