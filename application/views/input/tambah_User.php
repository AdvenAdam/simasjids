
<fieldset>
    <div class="page-header">
		<h4 class="page-title">Input User baru</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
                <a href="<?= site_url('home/dataUser') ;?>" class=""><i class="fas fa-reply" style="font-size:30px;"></i></i></a>
			</li>
        </ul>
	</div>
    <form method="post" action="" class="form-horizontal">  
	<div class="form-group">
    	<label for="username" class="col-md-2">Username</label>
        <div class="col-md-4">
        <input type="text" name="username" id="username" class="form-control" />
        </div>
        <?php echo form_error('username','<small class="text-danger pl-3">','</small>'); ?>
    </div>

    <div class="form-group">
    <label for="password" class="col-md-2">Password</label>
    <div class="col-md-4">
      <input type="password" name="password"class="form-control">
    </div>
    <?php echo form_error('password','<small class="text-danger pl-3">','</small>'); ?>

    </div>
    <div class="form-group">
    <label for="konfirmasi_password" class="col-md-2">Confirm Password</label>
    <div class="col-md-4">
    <input type="password" name="konfirmasi_password"class="form-control" id="konfirmasi_password">
    </div>
    </div>

    <div class="form-group">
    	<label for="nama_lengkap" class="col-md-2">Nama Lengkap</label>
        <div class="col-md-4">
        <input type="text" name="nama_lengkap" id="" class="form-control" />
        </div>
        <?php echo form_error('nama_lengkap','<small class="text-danger pl-3">','</small>'); ?>
    </div>
    
    <div class="form-group">
    <label for="jenis_kelamin"class="col-md-2">Jenis Kelamin</label>
    <div class="col-md-4">
    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
      <option Value ="">Pilih Jenis Kelamin</option>
      <option Value ="Laki-Laki">Laki-Laki</option>
      <option value ="Perempuan">Perempuan</option>
    </select>
  </div>
  <?php echo form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>'); ?>
  </div>
  <div class="form-group">
  <label for="level" class="col-md-2">Level</label>
  <div class="col-md-4">
  <input class="form-control" name="level"type="text" value="Admin" Placeholder="admin" readonly>
  </div>
  </div>

  <div class="form-group">
    	<label for="no_telepon" class="col-md-2">No Telepon</label>
        <div class="col-md-4">
        <input type="text" name="no_telepon" id="" class="form-control"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Tambah" class="btn btn-success">
        </div>
    </div>
    </form>
</fieldset>
