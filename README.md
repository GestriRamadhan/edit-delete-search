<div class="main-content khusus">
        <div class="konten khusus2">
            <div class="konten_dalem khusus3">
                    <h2 class="head" style="color: #4b4f58;">DATA MEMBER</h2>
                    <hr style="margin-top: -2px;">
                        <div class="headline">
                        <h5>Data Member Harian GYM-XYZ</h5>
                    </div>
                   <!-- Search Bar -->
                        <div class="col-lg-3">
                            <div class="input-group">
                                    <input type="text" name="cari" class="form-control border-right-0 cari" id="keyword" placeholder="Search" autocomplete="off">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white border-left-0 icone"><i class="fa fa-search"></i></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Search Bar -->

                    <!-- bagian isi tabel -->
                    <div class="container" id="container">
                        <div class="row tampil" id="row">
                            <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-hover table-striped table-bordered">
                                            <tr>    

                                                    <th>Nama Lengkap</th>
                                                    <th>Tanggal Masuk Member</th>
                                                    <th>Tanggal Keluar Member</th>
                                                    <th>Alamat</th>
                                                    <th>Jenis Member</th>
                                                    <th>Aksi</th>
                                            </tr>
                                        <?php
                                          include 'konek2.php';
                                          $query = $db->query("SELECT * FROM  datamemberharian");
                                          foreach ($query as $tampil) {
                                        ?>
                                                    <td data-target="nama_member"><?= htmlspecialchars($tampil ['nama_member']) ?></td>
                                                    <td data-target="tanggal_masuk"><?= htmlspecialchars($tampil['tanggal_masuk']) ?></td>
                                                     <td data-target="tanggal_keluar"><?= htmlspecialchars($tampil['tanggal_keluar']) ?></td>
                                                    <td data-target="alamat"><?= htmlspecialchars($tampil['alamat']) ?></td>
                                                    <td data-target="kls_member"><?= htmlspecialchars($tampil['kls_member']) ?></td>
                                                    <td>
                                                        <a href="#" id="<?= $row['id']; ?>" class="btn btn-info delete">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                        <a href="#" data-id="<?= $row['id']; ?>" data-role="update" class="btn btn-outline-secondary" id="openBtn">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    
                                            </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
    <!-- bagian isi tabel -->

</body>
</html>
