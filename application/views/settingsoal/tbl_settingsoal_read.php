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
        <h2 style="margin-top:0px">Tbl_settingsoal Read</h2>
        <table class="table">
	    <tr><td>Jumlah Soal</td><td><?php echo $jumlah_soal; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('settingsoal') ?>" class="btn btn-default">Kembali</a></td></tr>
	</table>
        </body>
</html>