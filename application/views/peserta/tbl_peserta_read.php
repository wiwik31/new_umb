<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA TBL_PESERTA</h3>
                    </div>
						<table class="table">
						<tr><td>Kode Pendaftaran</td><td><?php echo $kode_pendaftaran; ?></td></tr>
						<tr><td>Nama Peserta</td><td><?php echo $nama_peserta; ?></td></tr>
						<tr><td>Id Jurusan</td><td><?php echo $id_jurusan; ?></td></tr>
						<tr><td>Id Panitia</td><td><?php echo $id_panitia; ?></td></tr>
						<tr><td>Id Batch</td><td><?php echo $id_batch; ?></td></tr>
						<tr><td>Jenkel</td><td><?php echo $jenkel; ?></td></tr>
						<tr><td>Nama Ayah</td><td><?php echo $nama_ayah; ?></td></tr>
						<tr><td>Nama Ibu</td><td><?php echo $nama_ibu; ?></td></tr>
						<tr><td>Tgl Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
						<tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
						<tr><td>No Tlp</td><td><?php echo $no_tlp; ?></td></tr>
						<tr><td>Email</td><td><?php echo $email; ?></td></tr>
						<tr><td>Username</td><td><?php echo $username; ?></td></tr>
						<tr><td>Password</td><td><?php echo $password; ?></td></tr>
						<tr><td>Status</td><td><?php echo $status; ?></td></tr>
						<tr><td></td><td><a href="<?php echo site_url('peserta') ?>" class="btn btn-default">Cancel</a></td></tr>
					</table>
				</div>
            </div>
    </section>
</div>