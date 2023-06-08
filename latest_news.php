<?php
require 'db/db.php';
include 'header.php';

function url_origin( $s, $use_forwarded_host = false )
{
    $ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
    $sp       = strtolower( $s['SERVER_PROTOCOL'] );
    $protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
    $port     = $s['SERVER_PORT'];
    $port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
    $host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
    $host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
    return $protocol . '://' . $host;
}

function full_url( $s, $use_forwarded_host = false )
{
    return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
}

$absolute_url = full_url( $_SERVER );
$id=mysqli_real_escape_string($conn,$_GET['id']);
$search="SELECT * FROM articles where id='$id'";
$result=mysqli_query($conn, $search);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
if($count<>0){
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
}else{
   $id=0;
   $cat="Erreur";
   $title="Article introuvable";
   $content="Nous ne parvenons pas à trouver cette artcile; veuillez recharger la page ou revenir en arrière; Merci";
   $posted="Erreur";
   $author="Erreur";
   $edit="Erreur";
   $img="img/articles/Delete_96px.png";
   $img2="img/banner/bradcam.png";
   $folder="img/articles/";

}?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">

    <!-- CSS here -->
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

    <main>

        <!-- About US Start -->
        <div class="about-area2 gray-bg pt-60 pb-60">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="heading-news mb-30 pt-30">
                            <h3><?php echo $title ?></h3>
                        </div>
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="<?php echo $img ?>" style="height:50vh; object-fit:cover" alt="">
                            </div>

                            <style>
                            .about-prea a {
                                color: darkblue;
                                text-decoration: underline;
                            }
                            </style>
                            <div class="about-prea">
                                <?php echo $content ?>
                            </div>


                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>
                                    <ul>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $absolute_url ?>"
                                            target="_blank">
                                            <li><img src="img/icon/icons8_Facebook_48px.png"> </li>
                                        </a>

                                        <a href="whatsapp://send?text=<?php echo $absolute_url ?> "
                                            data-action="share/whatsapp/share" target="_blank">
                                            <li><img src="img/icon/icons8_WhatsApp_48px.png"> </li>
                                        </a>

                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"
                                            class="twitter-share-button" data-size="large" data-dnt="true"
                                            data-show-count="false">
                                            <li><img src="img/icon/icons8_Twitter_48px.png"> </li>
                                        </a>
                                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
                                        </script>
                                    </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- From -->
                        <div class="row d-none">
                            <div class="col-lg-8">
                                <form class="form-contact contact_form mb-80" action="contact_process.php" method="post"
                                    id="contactForm" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100 error" name="message" id="message"
                                                    cols="30" rows="9" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter Message'"
                                                    placeholder="Enter Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control error" name="name" id="name" type="text"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter your name'"
                                                    placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control error" name="email" id="email" type="email"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter email address'"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control error" name="subject" id="subject"
                                                    type="text" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter Subject'"
                                                    placeholder="Enter Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit"
                                            class="button button-contactForm boxed-btn boxed-btn2">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <style>
                            .single-follow .list {
                                justify-content: flex-start;
                                padding: 10px;
                            }

                            .single-follow .list li {
                                padding: 10px;
                                background: white;
                                margin: 5px;
                                width: auto;
                                border-radius: 5px;
                                border: 1px solid black;
                                color: black;
                                box-shadow: 1px 0px 2px black;
                            }

                            .single-follow .list a {
                                color: black;
                            }
                            </style>
                            <div class="single-box">
                                <h4 class="widget_title">Categories</h4>
                                <ul class="list row">
                                    <p></p>
                                    <?php 
                               
                                $search="SELECT * FROM categories";
                                $result=mysqli_query($conn, $search);
                                $count=mysqli_num_rows($result);
                                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                    ?>

                                    <li>
                                        <a href="./categories?cat=<?php echo $cat ?>"><?php echo $row['category'] ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="blog_assets/img/news/icon-fb.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="blog_assets/img/news/icon-tw.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="blog_assets/img/news/icon-ins.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="blog_assets/img/news/icon-yo.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About US End -->

        <div class="weekly2-news-area pt-50 pb-30 gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row">
                        <!-- Banner -->
                        <div class="col-lg-3">
                            <div class="home-banner2 d-none d-lg-block">
                                <img src="" alt="Pub">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="slider-wrapper">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="small-tittle mb-30">
                                            <h4>Articles similaires</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly2-news-active d-flex">
                                            <!-- Single -->

                                            <?php
                                          $search="SELECT * FROM articles where category='$cat'";
                                          $result=mysqli_query($conn, $search);
                                          $count=mysqli_num_rows($result);
                                          while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                            $posteds=$rows['posted_on'];
                                            $newDate2 = date("d, M Y", strtotime($posteds));
                                             ?>
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="<?php echo $folder.''.$rows['img']; ?>"
                                                        style="height:160px" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4 style="height:60px; overflow:hidden; text-overflow:ellipsis"><a
                                                            href="latest_news?id=<?php echo $rows['id'] ?>"><?php echo $rows['title'] ?></a>
                                                    </h4>
                                                    <p><?php echo $rows['posted_by'] ?> |
                                                        <?php echo  date("d, M Y", strtotime($newDate2))?></p>
                                                </div>
                                            </div>
                                            <?php } ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- footer  -->
    <?php
include 'footer.php';
 ?>
    <!-- Search model end -->

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