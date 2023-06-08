<?php
require 'db/db.php';
$search="SELECT * FROM articles  order by posted_on ASC LIMIT 9";
$result=mysqli_query($conn, $search);
$count=mysqli_num_rows($result);

?>




<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Environnementalu -Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" type="text/css" href=" css/lightbox.min.css ">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->


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

    <style>
    img:hover {
        transform: scale(1.5);
        -webkit-transition: all 1s ease-in-out;
        transition: all 1s ease-in-out;
    }

    a {
        color: black;
    }

    a:hover {
        color: black;
    }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php include'header.php'?>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1" style="height:40vh;background:linear-gradient(rgba(55, 200, 100, 0.5),
                                   rgba(55, 182, 151, 0.2)), url('img/banner/slider -07.jpg'), bottom center;
                background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>blog</h3>
                    </div>
                    <p></p>
                    <form action="search.php" method="POST">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input name="q" type="text" class="form-control" placeholder='Chercher un article'
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Chercher un article'">
                                <div class="input-group-append">
                                    <input class="btn" type="submit" name="request" value="Recherche">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->


    <!--================Blog Area =================-->
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
                                                
                                                    $search="SELECT * FROM `articles` ORDER BY posted_on DESC";
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
    <!--================Blog Area =================-->
    <!-- footer start -->
    <?php include'footer.php'?>
    <!--/ footer end  -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <!-- <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div> -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>



    <script>
    AOS.init();
    </script>

</body>

</html>