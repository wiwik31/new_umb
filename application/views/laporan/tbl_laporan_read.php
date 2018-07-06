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
	    <tr><td>Terdaftar</td><td><?php echo $terdaftar; ?></td></tr>
	    <tr><td>Selesai Ujian</td><td><?php echo $selesai_ujian; ?></td></tr>
	    <tr><td>Lulus</td><td><?php echo $lulus; ?></td></tr>
	    <tr><td>Tidak Lulus</td><td><?php echo $tidak_lulus; ?></td></tr>
	    <tr><td>Total</td><td><?php echo $total; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('laporan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>