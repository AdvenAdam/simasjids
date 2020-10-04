
<fieldset>
<div class="page-header">
	<h4 class="page-title">Edit Data</h4>
		<ul class="breadcrumbs">
	    	<li class="nav-home">
                <a href="<?= site_url('Kas/dataKM') ;?>" class=""><i class="fas fa-reply" style="font-size:30px;"></i></i></a>
			</li>
        </ul>
</div>
    <form method="POST" action="<?= site_url('Kas/ubahKM') ;?>" class="form-horizontal">
    <input type="hidden" name="id_km" value="<?= $KM->id_km ;?>">
    
	<div class="form-group">
    	<label for="uraianKM" class="col-md-2">Uraian</label>
        <div class="col-md-4">
        <input type="text" name="uraianKM" id="uraianKM" class="form-control" value="<?= $KM->uraian_km ;?>" />
        </div>
    </div>
    <div class="form-group">
    	<label for="masukKM" class="col-md-2">Penerimaan</label>
        <div class="col-md-4">
        <i>Rp. </i>
        <input type="text" id="masukKM" name="masukKM" class="form-control uang" value="<?= $KM->masuk ;?>"/>
        </div>
    </div>
    <div class="form-group">
    	<label for="keluarKM" class="col-md-2">Pengeluaran</label>
        <div class="col-md-4">
        <i>Rp. </i>
        <input type="text" id="keluarKM" name="keluarKM" class="form-control uang" value="<?= $KM->keluar ;?>"/>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Update" class="btn btn-success" />
        </div>
    </div>
    </form>
</fieldset>