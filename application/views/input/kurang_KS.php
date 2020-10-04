
<fieldset>
<div class="page-header">
	<h4 class="page-title">Input Pengeluaran</h4>
	<ul class="breadcrumbs">
		<li class="nav-home">
            <a href="<?= site_url('Kas/dataKS') ;?>" class=""><i class="fas fa-reply" style="font-size:30px;"></i></i></a>
		</li>
    </ul>
</div>
    <form method="post" action="" class="form-horizontal">
	<div class="form-group">
    	<label for="uraianKS" class="col-md-2">Uraian</label>
        <div class="col-md-4">
        <input type="text" name="uraianKS" id="uraianKS" class="form-control" require/>
        </div>
        <?= form_error('uraian','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="keluarKS" class="col-md-2">Pengeluaran</label>
        <div class="col-md-4">
        <i>Rp. </i>
        <input type="text" id="keluarKS" name="keluarKS" class="form-control uang" require/>
        </div>
        <?= form_error('penerimaan','<small class="text-danger pl-3">','</small>');?>
    </div>
    
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Tambah" class="btn btn-success" />
        </div>
    </div>
    </form>
</fieldset>