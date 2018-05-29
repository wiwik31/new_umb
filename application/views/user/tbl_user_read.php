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
        <h2 style="margin-top:0px">Tbl_user Read</h2>
        <table class="table">
	    <tr><td>Nama Lengkap</td><td><?php echo $full_name; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Foto Profil</td><td><?php echo $images; ?></td></tr>
	    <tr><td>Level User</td><td><?php echo $id_user_level; ?></td></tr>
	    <tr><td>Status Aktif</td><td><?php echo $is_aktif; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('user') ?>" class="btn btn-default">Kembali</a></td></tr>
	</table>
        </body>
</html>