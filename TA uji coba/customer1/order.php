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
    <!-- css -->
    <link rel=" stylesheet" href="css.css">
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
    <section class="content-section bg-primary text-white" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h2 class="mb-5">Order</h2>
            </div>
            <form class="bborder text-black text-justify" action="update.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <input class="form-control" type="text" name="nama">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="col-sm-2 col-form-label">Tanggal Pesanan</label>
                            <input class="form-control" type="date" name="tgl_pesan">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label class="col-sm-2 col-form-label">Jenis Sepatu</label>
                            <select name="jenis_sepatu" class="form-select" aria-label="Default select example">
                                <option value="Sneakers">Sneakers</option>
                                <option value="Flat Shoes">Flat Shoes</option>
                                <option value="Slip On">Slip On</option>
                                <option value="Boots">Boots</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label class="col-sm-2 col-form-label">Jenis Service</label>
                            <select name="jenis_service" class="form-select" aria-label="Default select example">
                                <option value="Regular Clean">Regular Clean</option>
                                <option value="Deep Clean">Deep Clean</option>
                                <option value="Unyellowing">Unyellowing</option>
                                <option value="Kid Shoes">Kid Shoes</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" cols="16" rows="2"> </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-sm-2 col-form-label">
                            <input class="btn btn-primary" type="submit" value="Simpan">
                            <a class="btn btn-secondary" href="index.html">Kembali</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
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