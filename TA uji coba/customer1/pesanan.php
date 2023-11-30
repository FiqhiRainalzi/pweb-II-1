<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>WELOKSHOES</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel="stylesheet" ">
    </head>
    <body id=" page-top">
    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">WELOKSHOES</a></li>
            <li class="sidebar-nav-item"><a href="index.html">Home</a></li>
            <li class="sidebar-nav-item"><a href="index.html?#services">Services</a></li>
            <li class="sidebar-nav-item"><a href="index.html?#portfolio">Pricelist</a></li>
            <li class="sidebar-nav-item"><a href="order.php">Order</a></li>
            <li class="sidebar-nav-item"><a href="pesanan.php">pesanan</a></li>
            <li class="sidebar-nav-item"><a href="index.html?#tentang">Tentang Kami</a></li>
            <li class="sidebar-nav-item"><a href="index.html?#contact">Contact</a></li>
        </ul>
    </nav>
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h2 class="mb-5">Pesanan Saya</h2>
            </div>
            <table class="table table-light table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal pesanan</th>
                        <th scope="col">Jenis Sepatu</th>
                        <th scope="col">Service</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Status</th>
                        <!-- <th scope="col">Aksi</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from transaksi");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['tgl_pesan']; ?></td>
                            <td><?php echo $d['jenis_sepatu']; ?></td>
                            <td><?php echo $d['jenis_service']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['status']; ?></td>

                            <!-- <td>
                                <a class="btn btn-success" href="edit.php?id=<?php echo $d['id_transaksi']; ?>">BAYAR</a> -->
                                <!-- <a class="btn btn-danger" href="hapus.php?id=<?php echo $d['id_transaksi']; ?>">HAPUS</a> -->
                            <!-- </td>  -->
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </section>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <h6 class="text-secondary mb-3">CONTACT</h6>
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/welok.shoescare/"><i class="icon-social-instagram"></i></a>Instagram
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-user"></i></a>WhatsApp
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    </body>

</html>