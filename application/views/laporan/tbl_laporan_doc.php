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
        <h2>Tbl_laporan List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Peserta</th>
		<th>Id Jurusan</th>
		<th>Tgl Ujian</th>
		<th>Id Nilai</th>
		<th>Status</th>
		
            </tr><?php
            foreach ($laporan_data as $laporan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $laporan->id_peserta ?></td>
		      <td><?php echo $laporan->id_jurusan ?></td>
		      <td><?php echo $laporan->tgl_ujian ?></td>
		      <td><?php echo $laporan->id_nilai ?></td>
		      <td><?php echo $laporan->status ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>