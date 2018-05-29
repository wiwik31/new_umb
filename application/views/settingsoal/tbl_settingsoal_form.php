<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA SETTING SOAL</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Jumlah Soal <?php echo form_error('jumlah_soal') ?></td><td><input type="text" class="form-control" name="jumlah_soal" id="jumlah_soal" placeholder="Jumlah Soal" value="<?php echo $jumlah_soal; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id_set" value="<?php echo $id_set; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('settingsoal') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>