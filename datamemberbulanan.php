<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="gym.png">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/styler.css?v=1.0">
    <link rel="stylesheet" href="css/dashboard.css?v=1.0">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="js/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

    <style>
    
.rentang {
    padding-bottom: 75px;
}
    </style>
</head>

<body>
    <div class="header">
        <img src="gym.png" width="1px" height="1px" class="float-right logo-fav">
        <h3 class="text-secondary font-weight-bold float-left logo">RONI</h3>
        <h3 class="text-secondary float-left logo2">- GYM</h3>
    </div>

    <div class="sidebar">
        <nav>
            <ul>
                <li class="rentang">
                    <img src="gym.png" class="img-fluid profile float-left" width="80px">

                </li>
                <script>
                    $(document).ready(function () {
                        $("#flip").click(function () {
                            $("#panel").slideToggle("medium");
                            $("#panel2").slideToggle("medium");
                        });
                        $("#flip2").click(function () {
                            $("#panel3").slideToggle("medium");
                            $("#panel4").slideToggle("medium");
                        });
                    });
                </script>
                <!-- dashboard -->
                    <a href="dashboard.php" style="text-decoration: none;">
                        <li>
                            <div>
                                    <span>Dashboard</span>
                            </div>
                        </li>
                    </a>

                    <!-- data -->
                    <li class="klik" id="flip" style="cursor:pointer;">
                        <div>
                            <span class="fas fa-database"></span>
                            <span>Data Anggota GYM</span>
                            <i class="fas fa-caret-up float-right" style="line-height: 20px;"></i>
                        </div>
                    </li>

                    <a href="datamemberbulanan.php" class="linkAktif">
                        <li id="panel" class="aktif" style="border-left: 5px solid #306bff;">
                            <div style="margin-left: 20px;">
                                    <span><i class="fas fa-file-invoice-dollar"></i></span>
                                    <span>Data Member Gym Bulanan</span>
                            </div>
                        </li>
                    </a>

                    <a href="datamemberharian.php" class="linkAktif">
                        <li id="panel2">
                            <div style="margin-left: 20px;">
                                    <span><i class="fas fa-hand-holding-usd"></i></span>
                                    <span>Data Member Gym Harian</span>
                            </div>
                        </li>
                    </a>
                <li class="klik2" id="flip2" style="cursor:pointer;">
                    <div>
                        <span class="fas fa-plus-circle"></span>
                        <span>Input Data Member</span>
                        <i class="fas fa-caret-right float-right" style="line-height: 20px;"></i>
                    </div>
                </li>

                <a href="tambahbulanan.php" class="linkAktif">
                    <li id="panel3" style="display: none;">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-file-invoice-dollar"></i></span>
                            <span>Input Data Member Bulanan</span>
                        </div>
                    </li>
                </a>

                <a href="tambahharian.php" class="linkAktif">
                    <li id="panel4" style="display: none;">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-hand-holding-usd"></i></span>
                            <span>Input Data Member Harian</span>
                        </div>
                    </li>
                </a>
                <a href="index.php" style="text-decoration: none;">
                    <li>
                        <div>
                            <span><i class="fas fa-sign-out-alt float-right log"></i></span>
                            <span>Loggout</span>
                        </div>
                    </li>
                </a>

                <!-- change icon -->
                <script>
                    $(".klik").click(function () {
                        $(this).find('i').toggleClass('fa-caret-up fa-caret-right');
                        if ($(".klik").not(this).find("i").hasClass("fa-caret-right")) {
                            $(".klik").not(this).find("i").toggleClass('fa-caret-up fa-caret-right');
                        }
                    });
                    $(".klik2").click(function () {
                        $(this).find('i').toggleClass('fa-caret-up fa-caret-right');
                        if ($(".klik2").not(this).find("i").hasClass("fa-caret-right")) {
                            $(".klik2").not(this).find("i").toggleClass('fa-caret-up fa-caret-right');
                        }
                    });
                </script>
                <!-- change icon -->
            </ul>
        </nav>
    </div>
 <div class="main-content khusus">
        <div class="konten khusus2">
            <div class="konten_dalem khusus3">
                    <h2 class="head" style="color: #4b4f58;">DATA MEMBER</h2>
                    <hr style="margin-top: -2px;">
                        <div class="headline">
                        <h5>Data Member Bulanan GYM-XYZ</h5>
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
                                          $query = $db->query("SELECT * FROM  datamember");
                                          foreach ($query as $tampil) {
                                        ?><tr>
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
            </div>
        </div>
    </div>
    <!-- bagian isi tabel -->
   
</body>
</html>
