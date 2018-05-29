<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_JURUSAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Kode Jurusan <?php echo form_error('kode_jurusan') ?></td><td><input type="text" class="form-control" name="kode_jurusan" id="kode_jurusan" placeholder="Kode Jurusan" value="<?php echo $kode_jurusan; ?>" /></td></tr>
	    <tr><td width='200'>Nama Jurusan <?php echo form_error('nama_jurusan') ?></td><td><input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Nama Jurusan" value="<?php echo $nama_jurusan; ?>" /></td></tr>
	    <tr><td width='200'>Jumlah Peserta <?php echo form_error('jumlah_peserta') ?></td><td><input type="text" class="form-control" name="jumlah_peserta" id="jumlah_peserta" placeholder="Jumlah Peserta" value="<?php echo $jumlah_peserta; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id_jurusan" value="<?php echo $id_jurusan; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('jurusan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>