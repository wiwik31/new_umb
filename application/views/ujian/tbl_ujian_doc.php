<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tbl_ujian List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Peserta</th>
		<th>Id Panitia</th>
		<th>Id Batch</th>
		<th>Jumlah Salah</th>
		<th>Jumlah Benar</th>
		<th>Nilai</th>
		<th>Status</th>
		
            </tr><?php
            foreach ($ujian_data as $ujian)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $ujian->id_peserta ?></td>
		      <td><?php echo $ujian->id_panitia ?></td>
		      <td><?php echo $ujian->id_batch ?></td>
		      <td><?php echo $ujian->jumlah_salah ?></td>
		      <td><?php echo $ujian->jumlah_benar ?></td>
		      <td><?php echo $ujian->nilai ?></td>
		      <td><?php echo $ujian->status ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>