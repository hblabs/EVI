<?php
require 'db/db.php';
$search="SELECT * FROM articles";
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
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
   <?php include'header.php'?>
    <!-- header-end -->
    
        <!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3>blog</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
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
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo $img ?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.php?id=<?php echo $id ?> ">
                                    <h2><?php echo $title ?></h2>
                                </a>
                                <p><?php echo $content ;?>
                                     <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i><?php echo $author ;?></a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo $posted ?></a></li>
                                </ul>
                            
                            </div>
                        </article><?php
                        ;
                    }
                ?>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                   <!--   <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                                               <li>
                                    <a href="#" class="d-flex">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                
                            </ul>
                        </aside>
                        -->  

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
<?php
                           
$all="SELECT * FROM articles";
$allresult=mysqli_query($conn, $all);
$allcount=mysqli_num_rows($allresult);

while ($row=mysqli_fetch_array($allresult, MYSQLI_ASSOC)) {
    $allid=$row['id'];
    $allcat=$row['category'];
    $alltitle=$row['title'];
    $allcontent=$row['content'];
    $allposted=$row['posted_on'];
    $allauthor=$row['posted_by'];
    $alledit=$row['edit_on'];
    
$allfolder="img/articles/";
$allimg=$allfolder.''.$row['img'];
$allimg2=$allfolder.''.$row['img'];

echo'

                            <div class="media post_item">
                                <img style="width:30%" src="'.$allimg.'" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.php?id='.$allid.'">
                                        <h3>'.$alltitle.'</h3>
                                    </a>
                                    <p>Publier le: '.$allposted.'</p>
                                </div>
                            </div>';
}
                            ?>
                            
                        </aside>
                       


                       

                        
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
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>

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




</body>

</html>