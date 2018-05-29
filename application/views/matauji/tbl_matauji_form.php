<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA MATA UJIAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Nama Matauji <?php echo form_error('nama_matauji') ?></td><td><input type="text" class="form-control" name="nama_matauji" id="nama_matauji" placeholder="Nama Matauji" value="<?php echo $nama_matauji; ?>" /></td></tr>

	    <tr><td width='200'>Status Aktif <?php echo form_error('aktif') ?></td><td>
        <?php echo form_dropdown('aktif', array('1' => 'AKTIF', '0' => 'TIDAK AKTIF'), $aktif, array('class' => 'form-control')); ?>
        </td></tr>

	    <tr><td></td><td><input type="hidden" name="id_matauji" value="<?php echo $id_matauji; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('matauji') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>