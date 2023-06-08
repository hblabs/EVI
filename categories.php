<?php require_once './header.php';
require 'db/db.php';
$categ=$_GET['cat'];
    ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.png">

    <link rel="stylesheet" href="blog_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="blog_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="blog_assets/css/ticker-style.css">
    <link rel="stylesheet" href="blog_assets/css/flaticon.css">
    <link rel="stylesheet" href="blog_assets/css/slicknav.css">
    <link rel="stylesheet" href="blog_assets/css/animate.min.css">
    <link rel="stylesheet" href="blog_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="blog_assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="blog_assets/css/themify-icons.css">
    <link rel="stylesheet" href="blog_assets/css/slick.css">
    <link rel="stylesheet" href="blog_assets/css/nice-select.css">
    <link rel="stylesheet" href="blog_assets/css/style.css">
    <!-- CSS here -->

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="favicon.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <?php // include 'header.php'; ?>
        <!-- Header End -->
    </header>
    <main>


        <!-- Trending Area Start -->
    
        <!-- Trending Area End -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="whats-news-wrapper">
                        <!-- Heading & Nav Button -->
                        <div class="row justify-content-between align-items-end mb-15">
                            <div class="col-xl-4">
                                <div class="section-tittle mb-30">
                                    <h3>A la Une</h3>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                href="#nav-home" role="tab" aria-controls="nav-home"
                                                aria-selected="true">Toutes</a>
                                            <?php
                                $search="SELECT * FROM `categories`";
                                $result=mysqli_query($conn, $search);
                                $count=mysqli_num_rows($result);

                                while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                $id=$row['id'];
                                $cat=$row['category'];
                            ?>


                                            <a class="nav-item nav-link"
                                                href="./categories?cat=<?php echo $cat ?>"><?php echo $cat ?></a>
                                            <?php }
                                  ?>
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <!-- Tab content -->
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <?php
                                                
                                                    $search="SELECT * FROM `articles` where category='$categ' ORDER BY posted_on DESC";
                                                    $result=mysqli_query($conn, $search);
                                                    $count=mysqli_num_rows($result);

                                                    while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                    $id=$row['id'];
                                                    $cat=$row['category'];
                                                    $title=$row['title'];
                                                    $content=$row['content'];
                                                    $posted=$row['posted_on'];
                                                    $newDate = date("d, M Y", strtotime($posted));
                                                    $author=$row['posted_by'];
                                                    $edit=$row['edit_on'];
                                                    $folder="img/articles/";
                                                    $img=$folder.''.$row['img'];

                                                    ?>
                                            <!-- Left Details Caption -->
                                            <div class="col-sm-12 col-md-6 col-xl-4 col-lg-4">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="<?php echo $img ?>"
                                                            style="height: 250px; object-fit:cover" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a
                                                                href="./latest_news?id=<?php echo $id ?>"><?php echo $title?></a>
                                                        </h4>
                                                        <span>by <?php echo $author ?> -
                                                            <?php echo $newDate ?></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php }  
                                                ?>

                                            <!-- Right single caption -->

                                        </div>
                                    </div>
                                    <!-- Card two -->


                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <!-- Banner -->


                    <!--                 pub are
                <div class="banner-one mt-20 mb-30">
                    <img src="blog_assets/img/gallery/body_card1.png" alt="">
                </div> -->


                </div>

            </div>
        </div>
    </section>
        <!-- Whats New End -->
        <!--   Weekly2-News start -->

        <!-- End Weekly-News -->
        <!--  Recent Articles start -->

        <!--Recent Articles End -->
        <!-- Start Video Area -->

        <!-- End Start Video area-->
        <!--   Weekly3-News start -->

        <!-- End Weekly-News -->
        <!-- banner-last Start -->
        <?php 
        include 'footer.php';
        ?>
        <!-- banner-last End -->
    </main>




    <!-- JS here -->

    <script src="./blog_assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./blog_assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./blog_assets/js/popper.min.js"></script>
    <script src="./blog_assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./blog_assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./blog_assets/js/owl.carousel.min.js"></script>
    <script src="./blog_assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./blog_assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./blog_assets/js/wow.min.js"></script>
    <script src="./blog_assets/js/animated.headline.js"></script>
    <script src="./blog_assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./blog_assets/js/jquery.scrollUp.min.js"></script>
    <script src="./blog_assets/js/jquery.nice-select.min.js"></script>
    <script src="./blog_assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./blog_assets/js/contact.js"></script>
    <script src="./blog_assets/js/jquery.form.js"></script>
    <script src="./blog_assets/js/jquery.validate.min.js"></script>
    <script src="./blog_assets/js/mail-script.js"></script>
    <script src="./blog_assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./blog_assets/js/plugins.js"></script>
    <script src="./blog_assets/js/main.js"></script>

</body>

</html>