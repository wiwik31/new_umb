<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA TBL_LAPORAN</h3>
                    </div>
        
        <div class="box-body">
            <div class='row'>
            <div class='col-md-9'>
            <div style="padding-bottom: 10px;"'>
        </div>
            </div>
            <div class='col-md-3'>
            <form action="<?php echo site_url('laporan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('laporan'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
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
		<th>Terdaftar</th>
		<th>Selesai Ujian</th>
		<th>Lulus</th>
		<th>Tidak Lulus</th>
		<th>Total</th>
		<th>Action</th>
            </tr><?php
            foreach ($laporan_data as $laporan)
            {
                ?>
                <tr>
			<td width="10px"><?php echo ++$start ?></td>
			<td><?php echo $laporan->terdaftar ?></td>
			<td><?php echo $laporan->selesai_ujian ?></td>
			<td><?php echo $laporan->lulus ?></td>
			<td><?php echo $laporan->tidak_lulus ?></td>
			<td><?php echo $laporan->total ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('laporan/read/'.$laporan->id_laporan),'<i class="fa fa-eye" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
				echo '  '; 
				echo anchor(site_url('laporan/update/'.$laporan->id_laporan),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
				echo '  '; 
				echo anchor(site_url('laporan/delete/'.$laporan->id_laporan),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>

        </table>
        <?php echo anchor(site_url('laporan/create'), '<i class="fa fa-print" aria-hidden="true"></i> CETAK LAPORAN', 'class="btn btn-danger btn-sm"'); ?></div>

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