<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA SOAL</h3>
                    </div>
        
        <div class="box-body">
            <div class='row'>
            <div class='col-md-9'>
            <div style="padding-bottom: 10px;">
        <?php echo anchor(site_url('soal/create'), '<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
        </div>
            </div>
            <div class='col-md-3'>
            <form action="<?php echo site_url('soal/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('soal'); ?>" class="btn btn-default">Ulang</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
                        </span>
                    </div>
                </form>
            </div>
            </div>
        
   
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Nama Mata Uji</th>
		<th>Pertanyaan</th>
		<th>A</th>
		<th>B</th>
		<th>C</th>
		<th>D</th>
        <th>E</th>
		<th>Jawaban</th>
		<th>Action</th>
            </tr><?php
            foreach ($soal_data as $soal)
            {
                ?>
                <tr>
			<td width="10px"><?php echo ++$start ?></td>
            <td><?php echo $soal->nama_matauji ?></td>
			<td><?php echo $soal->pertanyaan ?></td>
			<td><?php echo $soal->pilihan_a ?></td>
			<td><?php echo $soal->pilihan_b ?></td>
			<td><?php echo $soal->pilihan_c ?></td>
			<td><?php echo $soal->pilihan_d ?></td>
            <td><?php echo $soal->pilihan_e ?></td>
			<td><?php echo $soal->jawaban ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				// echo anchor(site_url('soal/read/'.$soal->id_soal),'<i class="fa fa-eye" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
				// echo '  '; 
				echo anchor(site_url('soal/update/'.$soal->id_soal),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit ','class="btn btn-danger btn-sm"'); 
				echo '  '; 
				echo anchor(site_url('soal/delete/'.$soal->id_soal),'<i class="fa fa-trash-o" aria-hidden="true"></i>Hapus 
','class="btn btn-danger btn-sm" Delete','onclick="javasciprt: return confirm(\'Yakin Menghapus ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
                    </div>
            </div>
            </div>
    </section>
</div>