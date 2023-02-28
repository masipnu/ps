<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Input Nilai
        <!--<small>advanced tables</small>-->
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <a class="btn btn-md btn-warning" href="?hal=nilai_tampil_mapel">Kembali</a>
                    <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Kode Kompetensi Dasar</th>
                            <th>Deskripsi</th>
                            <th class="
<?php
//fungsi untuk menyembunyikan tombol aksi jika rolenya operator
if ($_SESSION['role']==3){
    echo "hidden";
}
?>
">Aksi Nilai</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $tampil = "SElECT * FROM view_kd_input WHERE nik='$_SESSION[nik]'";
                        $query = mysqli_query($con,$tampil);
                        $no=0;
                        while ($data = mysqli_fetch_array($query)) {
//        var_dump($data);
                            $no++;
                            ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['nama_mapel']; ?></td>
                                <td><?= $data['kode_kd']; ?></td>
                                <td><?= $data['deskripsi']; ?></td>
                                <td class="
<?php
//fungsi untuk menyembunyikan tombol aksi jika rolenya operator
if ($_SESSION['role']==3){
echo "hidden";
}
?>
">
                                    <!-- Modifikasi tombol edit dan hapus-->
                                    <a class="btn btn-sm btn-info"
                                       href="?hal=nilai_tambah&id=<?= $data['id_kelas'] ?>">Input</a>
                                    <a class="btn btn-sm btn-warning"
                                       href="?hal=nilai_edit&id=<?= $data['id_kelas'] ?>">Edit</a>
                                    <a class="btn btn-sm btn-danger"
                                       href="?hal=nilai_proses&id=<?= $data['id_kelas'] ?>">Proses</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
