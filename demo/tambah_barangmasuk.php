<?php
// session_start();

// if (!isset($_SESSION['id'])) {
//   echo "
//   <script>
//   alert('Anda harus login dulu');
//   window.location = 'login.php';
//   </script>
//   ";
// }
// include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Material Dash</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css" />
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
    <script src="../assets/js/preloader.js"></script>
    <div class="body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php
        include 'menu.php';
        ?>
        <!-- partial -->
        <div class="main-wrapper mdc-drawer-app-content">
            <!-- partial:partials/_navbar.html -->
            <header class="mdc-top-app-bar">
                <div class="mdc-top-app-bar__row">
                    <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                        <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">
                            menu
                        </button>
                        <span class="mdc-top-app-bar__title">Selamat Datang !</span>
                        <button class="mdc-button mdc-button--outlined outlined-button--dark">
                            <?php echo date("d - F - Y") ?>
                        </button>
                    </div>
                </div>
            </header>
            <!-- partial -->
            <div class="page-wrapper mdc-toolbar-fixed-adjust">
                <main class="content-wrapper">
                    <!-- Tabel Stok Barang -->
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <h6 class="card-title card-padding pb-0">
                                <a href="barang_masuk.php">
                                    <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                                        <i class="material-icons mdc-button__icon">cancel</i>
                                    </button>
                                </a>
                                <b>Tambah Data Barang Masuk</b>
                            </h6>
                            <form method="post" action="">
                                <div class="mdc-card">
                                    <div class="template-demo">
                                        <h5 class="font-weight-light ">
                                            Nama Barang Masuk
                                        </h5>
                                        <div class="mdc-layout-grid__inner">
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                                <div class="mdc-text-field">
                                                    <input class="mdc-text-field__input" id="text-field-hero-input" name="nama_barang">
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    </br>
                                    <div class="template-demo">
                                        <h5 class="font-weight-light ">
                                            Stok Barang Masuk
                                        </h5>
                                        <div class="mdc-layout-grid__inner">
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                                <div class="mdc-text-field">
                                                    <input class="mdc-text-field__input" id="text-field-hero-input" name="stok">
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                    <div class="template-demo">
                                        <h5 class="font-weight-light ">
                                            Tempat Penyimpanan
                                        </h5>
                                        <div class="mdc-form-field">
                                            <div class="mdc-checkbox">
                                                <form>
                                                    <input type="radio" name="tempat" value="gudang1"> Gudang 1
                                                    <input type="radio" name="tempat" value="gudang2"> Gudang 2
                                                    <input type="radio" name="tempat" value="gudang3"> Gudang 3
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                    <button class="mdc-button mdc-button--raised icon-button filled-button--primary" name="simpan" value="simpan">
                                        <i class="material-icons mdc-button__icon">add</i> Tambah Barang
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
                <!-- partial:partials/_footer.html -->
                <footer>
                    <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright @Kelompok Berapa Lupa</span>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/material.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>


<?php
include "../config/koneksi.php";
if (isset($_POST['simpan'])) {
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $tempat = $_POST['tempat'];
    $barang = mysqli_query($koneksi, "SELECT * from barang WHERE nama_barang = '$nama_barang'");
    $cek    = mysqli_num_rows($barang);
    // echo $cek;
    // echo "
    //   <script>
    //   alert('" . $cek . "');
    //   </script>";

    if ($cek < 1) {
        $sql = mysqli_query($koneksi, "INSERT INTO barang VALUES('', '$nama_barang', '$stok','$tempat')");

        if ($sql) {
            echo "
      <script>
      alert('Data Berhasil Disimpan');
      window.location.href = 'barang_masuk.php';
      </script>";
        } else {
            echo "Data Tidak Masuk";
        }
    } else {
        $queryStok = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * from barang WHERE nama_barang = $nama_barang"));
        $stokBaru = $queryStok['stok'] + $stok;
        $sql = mysqli_query($koneksi, "UPDATE barang SET stok = $stokBaru WHERE nama_barang = '$nama_barang'");

        if ($sql) {
            echo "
      <script>
      alert('Data Berhasil Disimpan');
      window.location.href = 'barang_masuk.php';
      </script>";
        } else {
            echo "Data Tidak Masuk";
        }
    }

    $sql = mysqli_query($koneksi, "INSERT INTO barang_masuk VALUES('', '" . date("Y-m-d") . "' , '$nama_barang', '$stok','$tempat')");
}
?>

</html>