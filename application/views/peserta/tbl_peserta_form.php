<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_PESERTA</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Kode Pendaftaran <?php echo form_error('kode_pendaftaran') ?></td><td><input type="text" class="form-control" name="kode_pendaftaran" id="kode_pendaftaran" placeholder="Kode Pendaftaran" value="<?php echo $kode_pendaftaran; ?>" /></td></tr>
	    <tr><td width='200'>Nama Peserta <?php echo form_error('nama_peserta') ?></td><td><input type="text" class="form-control" name="nama_peserta" id="nama_peserta" placeholder="Nama Peserta" value="<?php echo $nama_peserta; ?>" /></td></tr>
	    <tr>
	   		<td>Jurusan</td>
	   		<td>
	   			<?php 
	   				if ($this->uri->segment('2')=="update") {
	   			 ?>
	   			 <select name="id_jurusan" class="form-control">
						<?php 
							foreach ($jurusan_data as $jurusan) {
								echo " <option value='$jurusan->id_jurusan'";
								echo $id_jurusan==$jurusan->id_jurusan?'selected':'' ;
								echo ">$jurusan->nama_jurusan</option>";
							}
						 ?>
				</select>
	   			 <?php } else{ ?>

	   			<select name="id_jurusan" id="id_jurusan" class="form-control">
	   				<?php foreach ($jurusan_data as $jurusan): ?>
	   				<option value="<?php echo $jurusan->id_jurusan ?>"><?php echo $jurusan->nama_jurusan ?></option>
	   				<?php endforeach ?>
	   			</select>
	   			 <?php } ?>
	   		</td>
	   	</tr>
	    <!-- <tr><td width='200'>Id Jurusan <?php echo form_error('id_jurusan') ?></td><td><input type="text" class="form-control" name="id_jurusan" id="id_jurusan" placeholder="Id Jurusan" value="<?php echo $id_jurusan; ?>" /></td></tr> -->
	    <!-- <tr><td width='200'>Id Panitia <?php echo form_error('id_panitia') ?></td><td><input type="text" class="form-control" name="id_panitia" id="id_panitia" placeholder="Id Panitia" value="<?php echo $id_panitia; ?>" /></td></tr> -->
	    <tr>
	   		<td>Panitia</td>
	   		<td>
	   			<?php 
	   				if ($this->uri->segment('2')=="update") {
	   			 ?>
	   			 <select name="id_panitia" class="form-control">
						<?php 
							foreach ($panitia_data as $panitia) {
								echo " <option value='$panitia->id_panitia'";
								echo $id_panitia==$panitia->id_panitia?'selected':'' ;
								echo ">$panitia->nama_panitia</option>";
							}
						 ?>
				</select>
	   			 <?php } else{ ?>

	   			<select name="id_panitia" id="id_panitia" class="form-control">
	   				<?php foreach ($panitia_data as $panitia): ?>
	   				<option value="<?php echo $panitia->id_panitia ?>"><?php echo $panitia->nama_panitia ?></option>
	   				<?php endforeach ?>
	   			</select>
	   			 <?php } ?>
	   		</td>
	   	</tr>
	   	<tr>
	   		<td>Jadwal</td>
	   		<td>
	   			<?php 
	   				if ($this->uri->segment('2')=="update") {
	   			 ?>
	   			 <select name="id_batch" class="form-control">
						<?php 
							foreach ($batch_data as $batch) {
								echo " <option value='$batch->id_batch'";
								echo $id_batch==$batch->id_batch?'selected':'' ;
								echo ">$batch->nama_batch</option>";
							}
						 ?>
				</select>
	   			 <?php } else{ ?>

	   			<select name="id_batch" id="id_batch" class="form-control">
	   				<?php foreach ($batch_data as $batch): ?>
	   				<option value="<?php echo $batch->id_batch ?>"><?php echo $batch->nama_batch ?></option>
	   				<?php endforeach ?>
	   			</select>
	   			 <?php } ?>
	   		</td>
	   	</tr>
	    <!-- <tr><td width='200'>Id Batch <?php echo form_error('id_batch') ?></td><td><input type="text" class="form-control" name="id_batch" id="id_batch" placeholder="Id Batch" value="<?php echo $id_batch; ?>" /></td></tr> -->
	    <!-- <tr><td width='200'>Jenkel <?php echo form_error('jenkel') ?></td><td><input type="text" class="form-control" name="jenkel" id="jenkel" placeholder="Jenkel" value="<?php echo $jenkel; ?>" /></td></tr> -->
	    <tr>
	    	<td width='200'>Jenkel <?php echo form_error('jenkel') ?></td>
	    	<td><input type="radio" name="jenkel" value="L" checked="" />Laki-laki
	    		<input type="radio" name="jenkel" value="P"/>Perempuan<br/>
	    	</td>
	    </tr>
	    <tr><td width='200'>Nama Ayah <?php echo form_error('nama_ayah') ?></td><td><input type="text" class="form-control"s name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" value="<?php echo $nama_ayah; ?>" /></td></tr>
	    <tr><td width='200'>Nama Ibu <?php echo form_error('nama_ibu') ?></td><td><input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" value="<?php echo $nama_ibu; ?>" /></td></tr>
	    <tr><td width='200'>Tgl Lahir <?php echo form_error('tgl_lahir') ?></td><td><input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" /></td></tr>
	    
        <tr><td width='200'>Alamat <?php echo form_error('alamat') ?></td><td> <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea></td></tr>
	    <tr><td width='200'>No Tlp <?php echo form_error('no_tlp') ?></td><td><input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No Tlp" value="<?php echo $no_tlp; ?>" /></td></tr>
	    <tr><td width='200'>Email <?php echo form_error('email') ?></td><td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td></tr>
	    <tr><td width='200'>Username <?php echo form_error('username') ?></td><td><input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" /></td></tr>
	    <tr><td width='200'>Password <?php echo form_error('password') ?></td><td><input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" /></td></tr>
	    <tr><td width='200'>Status Aktif <?php echo form_error('status') ?></td><td>
        <?php echo form_dropdown('status', array('1' => 'Aktif', '0' => 'Tidak Aktif'), $status, array('class' => 'form-control')); ?>
        </td></tr>
	    <!-- <tr><td width='200'>Status <?php echo form_error('status') ?></td><td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" /></td></tr> -->
	    <tr><td></td><td><input type="hidden" name="id_peserta" value="<?php echo $id_peserta; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('peserta') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>