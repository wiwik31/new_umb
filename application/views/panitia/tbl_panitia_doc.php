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
        <h2>Tbl_panitia List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Batch</th>
		<th>Nama Panitia</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th>Status</th>
		
            </tr><?php
            foreach ($panitia_data as $panitia)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $panitia->id_batch ?></td>
		      <td><?php echo $panitia->nama_panitia ?></td>
		      <td><?php echo $panitia->email ?></td>
		      <td><?php echo $panitia->username ?></td>
		      <td><?php echo $panitia->password ?></td>
		      <td><?php echo $panitia->status ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>