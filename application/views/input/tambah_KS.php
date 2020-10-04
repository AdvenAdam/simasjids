
<fieldset>
    <div class="page-header">
		<h4 class="page-title">Input Penerimaan Kas Sosial</h4>
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
        <input type="text" name="uraianKS" id="uraianKS" class="form-control" required/>
        </div>
    </div>
    <div class="form-group">
    	<label for="masukKS" class="col-md-2">Penerimaan</label>
        <div class="col-md-4">
        <i>Rp. </i>
        <input type="text" id="masukKS" name="masukKS" class="form-control uang" required/>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Tambah" class="btn btn-success">
        </div>
    </div>
    </form>
</fieldset>
