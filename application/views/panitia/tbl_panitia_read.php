<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA PANITIA</h3>
            </div>
            <table class="table">
            <tr><td>Nama Panitia</td><td><?php echo $nama_panitia; ?></td></tr>
            <tr><td>Nama Batch</td><td><?php echo $batch; ?></td></tr>
            <tr><td>Username</td><td><?php echo $username; ?></td></tr>
            <tr><td>Password</td><td><?php echo $password; ?></td></tr>
            <tr>
                <td>Status</td>
                <td>
                    <?php 
                    if ($status == '1') {
                        echo 'Aktif';
                    }else{
                        echo 'Tidak Aktif';
                    }
                    ?>
                </td>
            </tr>
            <tr><td></td><td><a href="<?php echo site_url('panitia') ?>" class="btn btn-default">Cancel</a></td></tr>
            </table>
        </div>
    </section>
</div>
