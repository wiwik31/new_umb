<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA PANITIA</h3>
            </div>
            <table class="table">
            <tr><td>Kode Jurusan</td><td><?php echo $kode_jurusan; ?></td></tr>
            <tr><td>Nama Jurusan</td><td><?php echo $nama_jurusan; ?></td></tr>
            <tr><td>Jumlah Peserta</td>
                <td><?php 
                        $qry =mysql_query("SELECT count(jumlah_peserta) as jumlah from tbl_jurusan");
                        $data =mysqli_fetch_array($qry);
                        echo $data['jumlah'];
                         ?></td>
            </tr>
            <tr><td></td><td><a href="<?php echo site_url('jurusan') ?>" class="btn btn-default">Cancel</a></td></tr>
            </table>
            </div>
    </section>
</div>
