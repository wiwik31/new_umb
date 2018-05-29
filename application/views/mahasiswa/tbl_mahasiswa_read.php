<!doctype html>
<html>
    <head>
        <title>SIUMPT | STMIK Handayani</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tbl_mahasiswa Read</h2>
        <table class="table">
        <tr><td>Username</td><td><?php echo $username; ?></td></tr>
        <tr><td>Password</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Nama Mahasiswa</td><td><?php echo $nama_mahasiswa; ?></td></tr>
	    <tr><td>Asal Sekolah</td><td><?php echo $asal_sekolah; ?></td></tr>
	    <tr><td>No Pendaftaran</td><td><?php echo $no_pendaftaran; ?></td></tr>
	    <tr><td>Gambar</td><td><?php echo $gambar; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>