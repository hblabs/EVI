<?php include 'actions/counts.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title>Environnementalu Admin</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.png" />
    <?php include 'headers.php'; ?>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php include 'menu.php'; ?>
            <!-- / Menu -->

            <!-- Layout container -->

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-lg-8 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Bienvenu <b><?php echo $name ?></b>! 🎉
                                            </h5>
                                            <p class="mb-4">
                                                Bienvenu au Tableau de Bord de Environnementalu.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img src="assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 order-1">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body" align="center">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                            </div>
                                            <span>Nos Articles</span>
                                            <h3 class="card-title text-nowrap mb-1"><?php echo $art_count ?></h3>
                                            <h6><a href="all_articles">Voir Tous</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body" align="center">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                            </div>
                                            <span>Nos Offres</span>
                                            <h3 class="card-title text-nowrap mb-1"><?php echo $offer_row_count ?></h3>
                                            <h6><a href="offers">Voir Tous</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="" align="center">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary"><a href="">Nos Partenaires</a>
                                            </h5>
                                            <h4><?php echo $partenaires_row_count ?></h4>
                                            <p class="mb-4">
                                            <h6><a href="partenaires">Voir Tous</a></h6>
                                            </p>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <p>  
                    </div>
                    
                

                <!-- / Content -->

                <!-- Footer -->
                <?php include 'footer.php'; ?>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>