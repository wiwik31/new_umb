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
        <button>djfhh</button>
        <h2 style="margin-top:0px">Tbl_ujian Read</h2>
        <table class="table">
	    <tr><td>Id Peserta</td><td><?php echo $id_peserta; ?></td></tr>
	    <tr><td>Id Panitia</td><td><?php echo $id_panitia; ?></td></tr>
	    <tr><td>Id Batch</td><td><?php echo $id_batch; ?></td></tr>
	    <tr><td>Jumlah Salah</td><td><?php echo $jumlah_salah; ?></td></tr>
	    <tr><td>Jumlah Benar</td><td><?php echo $jumlah_benar; ?></td></tr>
	    <tr><td>Nilai</td><td><?php echo $nilai; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('ujian') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>