<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA TBL_PESERTA</h3>
                    </div>
        
        <div class="box-body">
            <div class='row'>
            <div class='col-md-9'>
            <div style="padding-bottom: 10px;">
        <?php echo anchor(site_url('peserta/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?></div>
            </div>
            <div class='col-md-3'>
            <form action="<?php echo site_url('peserta/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('peserta'); ?>" class="btn btn-default">Reset</a>
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
                <th>Kode Pendaftaran</th>
                <th>Nama Peserta</th>
                <th>Id Jurusan</th>
                <th>Id Batch</th>
                <th>Username</th>
                <th>Status</th>
                <th>Action</th>
            </tr><?php
            foreach ($peserta_data as $peserta)
            {
                ?>
                <tr>
			<td width="10px"><?php echo ++$start ?></td>
			<td><?php echo $peserta->kode_pendaftaran ?></td>
			<td><?php echo $peserta->nama_peserta ?></td>
			<td><?php echo $peserta->id_jurusan ?></td>
			<td><?php echo $peserta->id_batch ?></td>
			<td><?php echo $peserta->username ?></td>
			<td><?php echo $peserta->status ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('peserta/read/'.$peserta->id_peserta),'<i class="fa fa-eye" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
				echo '  '; 
				echo anchor(site_url('peserta/update/'.$peserta->id_peserta),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
                echo '  '; 
                echo anchor(site_url('peserta/delete/'.$peserta->id_peserta),'<i class="fa fa-trash-o" aria-hidden="true"></i>',array('class'=>'btn btn-danger btn-sm', 'onclick'=>"javasciprt: return confirm('Are You Sure ?')"));
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