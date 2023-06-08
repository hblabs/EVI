<?php
require 'db/db.php';
$id=mysqli_real_escape_string($conn,$_GET['id']);
$search="SELECT * FROM articles WHERE category='$id'";
$result=mysqli_query($conn, $search);
$count=mysqli_num_rows($result);

?>




<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Environnementalu -Blog-<?php echo $id  ?></title>
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

    <style>
        img:hover{
            transform: scale(1.5);
            -webkit-transition: all 1s ease-in-out;
            transition: all 1s ease-in-out;
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
        <div class="bradcam_area bradcam_bg_1" style="height:40vh">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3>blog - <?php echo $id ?></h3>
                            </div>
                            <p></p>
                            <form action="search.php" method="POST">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input name="q" type="text" class="form-control" placeholder='Chercher un article'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Chercher un article'">
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
    <section class="blog_area section-padding" style="background:azure">
        <div class="container">
            <div class="col-12">
           
            </div><p></p>
            <div class="row">
                <div class="col-12">

               
                           
                        


                        <center>
                        <h2 data-aos="fade-top"
                data-aos-easing="linear"
                data-aos-duration="1500">Articles de la même catégorie</h2>
                        </center>
                    <div class="row">
                        <?php
                        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $id=$row['id'];
                            $cat=$row['category'];
                            $title=$row['title'];
                            $content=$row['content'];
                            $posted=$row['posted_on'];
                            $author=$row['posted_by'];
                            $edit=$row['edit_on'];
                            
                        $folder="img/articles/";
                        $img=$folder.''.$row['img'];
                        $img2=$folder.''.$row['img'];
                       
                       ?>
         
                        <article class="col-md-4 col-sm-6 p-2 col-lg-4" data-aos="fade-left"
                data-aos-easing="linear"
                data-aos-duration="1500">
                            <div class="art" style="border-radius:0px 30px 0px 30px; overflow: hidden; background: skyblue;">
                                <div class="title"> 
                                    <a href="single-blog?id=<?php echo $id ?> "><div class="img" style="height: 210px; width:100%;overflow: hidden;">
                                        <img class="img-fluid" src="<?php echo $img ?>" alt="" style="height: 100%; width:100%; object-fit: cover; " >
                                    </div></a>
                                    <div class="title p-2" style="max-height:50px; width:100%; ">
                                        <a href="single-blog?id=<?php echo $id ?> "> <h5 style="max-height:50px;text-overflow:ellipsis;"> <?php echo $title ?></h5>  </a>
                                    </div>
                                    <p></p>
                                    <div class="row p-1" style="font-size:12px; text-align:center">
                                      <!-- <a href="#"><i class="fa fa-date"></i> <?php echo $posted ?></a> -->
                                    </div>
                                </div>
                            </div>
                        </article><?php
                            ;
                        }
                    ?>

                        
                    </div>
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