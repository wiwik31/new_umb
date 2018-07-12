<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_LAPORAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Terdaftar <?php echo form_error('terdaftar') ?></td><td><input type="text" class="form-control" name="terdaftar" id="terdaftar" placeholder="Terdaftar" value="<?php echo $terdaftar; ?>" /></td></tr>
	    <tr><td width='200'>Selesai Ujian <?php echo form_error('selesai_ujian') ?></td><td><input type="text" class="form-control" name="selesai_ujian" id="selesai_ujian" placeholder="Selesai Ujian" value="<?php echo $selesai_ujian; ?>" /></td></tr>
	    <tr><td width='200'>Lulus <?php echo form_error('lulus') ?></td><td><input type="text" class="form-control" name="lulus" id="lulus" placeholder="Lulus" value="<?php echo $lulus; ?>" /></td></tr>
	    <tr><td width='200'>Tidak Lulus <?php echo form_error('tidak_lulus') ?></td><td><input type="text" class="form-control" name="tidak_lulus" id="tidak_lulus" placeholder="Tidak Lulus" value="<?php echo $tidak_lulus; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id_laporan" value="<?php echo $id_laporan; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('laporan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>