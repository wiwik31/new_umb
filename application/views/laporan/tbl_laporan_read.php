<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tbl_laporan Read</h2>
        <table class="table">
	    <tr><td>Id Jurusan</td><td><?php echo $id_jurusan; ?></td></tr>
	    <tr><td>Kode Pendaftaran</td><td><?php echo $kode_pendaftaran; ?></td></tr>
	    <tr><td>Id Peserta</td><td><?php echo $id_peserta; ?></td></tr>
	    <tr><td>Id Panitia</td><td><?php echo $id_panitia; ?></td></tr>
	    <tr><td>Id Batch</td><td><?php echo $id_batch; ?></td></tr>
	    <tr><td>Tgl Ujian</td><td><?php echo $tgl_ujian; ?></td></tr>
	    <tr><td>Durasi</td><td><?php echo $durasi; ?></td></tr>
	    <tr><td>Id Nilai</td><td><?php echo $id_nilai; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('laporan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>