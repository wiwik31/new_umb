<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA PANITIA</h3>
            </div>
            <table class="table">
            <tr><td>Nama Batch</td><td><?php echo $nama_batch; ?></td></tr>
            <tr><td>Waktu Batch</td><td><?php echo $waktu_batch; ?></td></tr>
            <tr><td>Tgl</td><td><?php echo $tgl; ?></td></tr>
            <tr><td>Status</td><td><?php echo $status; ?></td></tr>
            <tr><td></td><td><a href="<?php echo site_url('batch') ?>" class="btn btn-default">Cancel</a></td></tr>
            </table>
            </div>
    </section>
</div>