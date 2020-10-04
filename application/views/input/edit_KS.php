
<fieldset>
<div class="page-header">
	<h4 class="page-title">Edit Data</h4>
		<ul class="breadcrumbs">
	    	<li class="nav-home">
                <a href="<?= site_url('Kas/dataKS') ;?>" class=""><i class="fas fa-reply" style="font-size:30px;"></i></i></a>
			</li>
        </ul>
</div>
    <form method="POST" action="<?= site_url('Kas/ubahKS') ;?>" class="form-horizontal">
    <input type="hidden" name="id_ks" value="<?= $KS->id_ks ;?>">
	<div class="form-group">
    	<label for="uraianKS" class="col-md-2">Uraian</label>
        <div class="col-md-4">
        <input type="text" name="uraianKS" id="uraianKS" class="form-control" value="<?= $KS->uraian_ks ;?>" />
        </div>
    </div>
    <div class="form-group">
    	<label for="masukKS" class="col-md-2">Penerimaan</label>
        <div class="col-md-4">
        <i>Rp. </i>
        <input type="text" id="masukKS" name="masukKS" class="form-control uang" value="<?= $KS->masuk ;?>"/>
        </div>
    </div>
    <div class="form-group">
    	<label for="keluarKS" class="col-md-2">Pengeluaran</label>
        <div class="col-md-4">
        <i>Rp. </i>
        <input type="text" id="keluarKS" name="keluarKS" class="form-control uang" value="<?= $KS->keluar ;?>"/>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Update" class="btn btn-success" />
        </div>
    </div>
    </form>
</fieldset>