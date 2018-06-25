<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_LAPORAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Id Peserta <?php echo form_error('id_peserta') ?></td><td><input type="text" class="form-control" name="id_peserta" id="id_peserta" placeholder="Id Peserta" value="<?php echo $id_peserta; ?>" /></td></tr>
	    <tr><td width='200'>Id Jurusan <?php echo form_error('id_jurusan') ?></td><td><input type="text" class="form-control" name="id_jurusan" id="id_jurusan" placeholder="Id Jurusan" value="<?php echo $id_jurusan; ?>" /></td></tr>
	    <tr><td width='200'>Tgl Ujian <?php echo form_error('tgl_ujian') ?></td><td><input type="date" class="form-control" name="tgl_ujian" id="tgl_ujian" placeholder="Tgl Ujian" value="<?php echo $tgl_ujian; ?>" /></td></tr>
	    <tr><td width='200'>Id Nilai <?php echo form_error('id_nilai') ?></td><td><input type="text" class="form-control" name="id_nilai" id="id_nilai" placeholder="Id Nilai" value="<?php echo $id_nilai; ?>" /></td></tr>
	    <tr><td width='200'>Status <?php echo form_error('status') ?></td><td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id_laporan" value="<?php echo $id_laporan; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('laporan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>