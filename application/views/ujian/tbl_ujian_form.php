<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_UJIAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Id Peserta <?php echo form_error('id_peserta') ?></td><td><input type="text" class="form-control" name="id_peserta" id="id_peserta" placeholder="Id Peserta" value="<?php echo $id_peserta; ?>" /></td></tr>
	    <tr><td width='200'>Id Panitia <?php echo form_error('id_panitia') ?></td><td><input type="text" class="form-control" name="id_panitia" id="id_panitia" placeholder="Id Panitia" value="<?php echo $id_panitia; ?>" /></td></tr>
	    <tr><td width='200'>Id Batch <?php echo form_error('id_batch') ?></td><td><input type="text" class="form-control" name="id_batch" id="id_batch" placeholder="Id Batch" value="<?php echo $id_batch; ?>" /></td></tr>
	    <tr><td width='200'>Jumlah Salah <?php echo form_error('jumlah_salah') ?></td><td><input type="text" class="form-control" name="jumlah_salah" id="jumlah_salah" placeholder="Jumlah Salah" value="<?php echo $jumlah_salah; ?>" /></td></tr>
	    <tr><td width='200'>Jumlah Benar <?php echo form_error('jumlah_benar') ?></td><td><input type="text" class="form-control" name="jumlah_benar" id="jumlah_benar" placeholder="Jumlah Benar" value="<?php echo $jumlah_benar; ?>" /></td></tr>
	    <tr><td width='200'>Nilai <?php echo form_error('nilai') ?></td><td><input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai" value="<?php echo $nilai; ?>" /></td></tr>
	    <tr><td width='200'>Status <?php echo form_error('status') ?></td><td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id_ujian" value="<?php echo $id_ujian; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('ujian') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>