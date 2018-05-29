<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA SOAL</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'>   
	   	<tr>
	   		<td>Nama Mata Uji</td>
	   		<td>
	   			<?php 
	   				if ($this->uri->segment('2')=="update") {
	   			 ?>
	   			 <select name="id_matauji" class="form-control">
						<?php 
							foreach ($matauji_data as $matauji) {
								echo " <option value='$matauji->id_matauji'";
								echo $id_matauji==$matauji->id_matauji?'selected':'' ;
								echo ">$matauji->nama_matauji</option>";
							}
						 ?>
				</select>
	   			 <?php } else{ ?>

	   			<select name="id_matauji" id="id_matauji" class="form-control">
	   				<?php foreach ($matauji_data as $matauji): ?>
	   				<option value="<?php echo $matauji->id_matauji ?>"><?php echo $matauji->nama_matauji ?></option>
	   				<?php endforeach ?>
	   			</select>
	   			 <?php } ?>
	   		</td>

	   	</tr>
	    <tr><td width='200'>Pertanyaan <?php echo form_error('pertanyaan') ?></td><td><input type="text" class="form-control" name="pertanyaan" id="pertanyaan" placeholder="Pertanyaan" value="<?php echo $pertanyaan; ?>" /></td></tr>
	    <tr><td width='200'>A <?php echo form_error('pilihan_a') ?></td><td><input type="text" class="form-control" name="pilihan_a" id="pilihan_a" placeholder="A" value="<?php echo $pilihan_a; ?>" /></td></tr>
	    <tr><td width='200'>B <?php echo form_error('pilihan_b') ?></td><td><input type="text" class="form-control" name="pilihan_b" id="pilihan_b" placeholder="B" value="<?php echo $pilihan_b; ?>" /></td></tr>
	    <tr><td width='200'>C <?php echo form_error('pilihan_c') ?></td><td><input type="text" class="form-control" name="pilihan_c" id="pilihan_c" placeholder="C" value="<?php echo $pilihan_c; ?>" /></td></tr>
	    <tr><td width='200'>D <?php echo form_error('pilihan_d') ?></td><td><input type="text" class="form-control" name="pilihan_d" id="pilihan_d" placeholder="D" value="<?php echo $pilihan_d; ?>" /></td></tr>
	    <tr><td width='200'>E <?php echo form_error('pilihan_e') ?></td><td><input type="text" class="form-control" name="pilihan_e" id="pilihan_e" placeholder="E" value="<?php echo $pilihan_e; ?>" /></td></tr>
	    <tr><td width='200'>Jawaban <?php echo form_error('jawaban') ?></td><td><input type="text" class="form-control" name="jawaban" id="jawaban" placeholder="Jawaban " value="<?php echo $jawaban; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id_soal" value="<?php echo $id_soal; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('soal') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>