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
        <h2 style="margin-top:0px">Tampilan Mata Ujian</h2>
        <table class="table">
	    <tr><td>Nama Matauji</td><td><?php echo $nama_matauji; ?></td></tr>
	    <tr><td>Status Aktif</td><td><?php echo $aktif; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('matauji') ?>" class="btn btn-default">Kembali</a></td></tr>
	</table>
        </body>
</html>