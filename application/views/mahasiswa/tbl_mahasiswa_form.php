<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_MAHASISWA</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
            
<table class='table table-bordered>'        
		 <tr><td width='200'>Username <?php echo form_error('username') ?></td><td><input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" /></td></tr>
		 <tr><td width='200'>Password <?php echo form_error('password') ?></td><td><input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" /></td></tr>
	    <tr><td width='200'>Nama Mahasiswa <?php echo form_error('nama_mahasiswa') ?></td><td><input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Nama Mahasiswa" value="<?php echo $nama_mahasiswa; ?>" /></td></tr>
	    <tr><td width='200'>Asal Sekolah <?php echo form_error('asal_sekolah') ?></td><td><input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah" value="<?php echo $asal_sekolah; ?>" /></td></tr>
	    <tr><td width='200'>No Pendaftaran <?php echo form_error('no_pendaftaran') ?></td><td><input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="No Pendaftaran" value="<?php echo $no_pendaftaran; ?>" /></td></tr>
        <tr><td width='200'>Foto Profile <?php echo form_error('gambar') ?></td><td> <input type="file" name="gambar"></td></tr>

	    <!-- <tr><td width='200'>Gambar <?php echo form_error('gambar') ?></td><td><input type="text" class="form-control" name="gambar" id="gambar" placeholder="Gambar" value="<?php echo $gambar; ?>" /></td></tr> -->
	    <tr><td></td><td><input type="hidden" name="id_mahasiswa" value="<?php echo $id_mahasiswa; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>