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
        <h2 style="margin-top:0px">Soal Read</h2>
        <table class="table">
        <tr><td>Id Matauji</td><td><?php echo $id_matauji; ?></td></tr>
	    <tr><td>Pertanyaan</td><td><?php echo $pertanyaan; ?></td></tr>
	    <tr><td>A</td><td><?php echo $pilihan_a; ?></td></tr>
	    <tr><td>B</td><td><?php echo $pilihan_b; ?></td></tr>
	    <tr><td>C</td><td><?php echo $pilihan_c; ?></td></tr>
	    <tr><td>D</td><td><?php echo $pilihan_d; ?></td></tr>
        <tr><td>E</td><td><?php echo $pilihan_e; ?></td></tr>
	    <tr><td>Jawaban</td><td><?php echo $jawaban; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('soal') ?>" class="btn btn-default">Kembali</a></td></tr>
	</table>
        </body>
</html>