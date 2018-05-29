<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_BATCH</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Nama Batch <?php echo form_error('nama_batch') ?></td><td><input type="text" class="form-control" name="nama_batch" id="nama_batch" placeholder="Nama Batch" value="<?php echo $nama_batch; ?>" /></td></tr>
	    <tr><td width='200'>Waktu Batch <?php echo form_error('waktu_batch') ?></td><td><input type="text" class="form-control" name="waktu_batch" id="waktu_batch" placeholder="Waktu Batch" value="<?php echo $waktu_batch; ?>" /></td></tr>
	    <tr><td width='200'>Tgl <?php echo form_error('tgl') ?></td><td><input type="date" class="form-control" name="tgl" id="tgl" placeholder="Tgl" value="<?php echo $tgl; ?>" /></td></tr>
	    <tr><td width='200'>Status <?php echo form_error('status') ?></td><td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id_batch" value="<?php echo $id_batch; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('batch') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>