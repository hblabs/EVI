<?php
require 'db/db.php';
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

}




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

?>




    <!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Environnementalu -Blog - <?php echo $title ?></title>
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
        <link rel="stylesheet" type="text/css" href=" css/lightbox.min.css ">
        <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>



        <style>
         
        </style>
    </head>

    <body>
        <!--[if lte IE 9]>
            <p class="broupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- header-start -->
        <?php include 'header.php'?>
        <!-- header-end -->

        <!-- bradcam_area  -->
        <!-- <div class="bradcam_area bradcam_bg_1" style='background-image: url("<?php echo $img2 ?>");'>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--/ bradcam_area  -->

        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list" >
                        <div class="single-post p-2" >
                            <div class="feature-img">
                                <h3>
                                <?php echo $title ?>
                            </h3>
                                <div class="galery">
                                    <div class="self-gallery">
                                        <a href="<?php echo $img ?>" data-lightbox="mygallery">
                                <img class="card-img rounded-0" src="<?php echo $img ?>" alt="" style="heigh: 500px; object-fit: cover;">
                                
                                </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_details">

                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo $author ?></a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?php echo $posted ?></a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?php echo $cat ?></a></li>
                                </ul>
                                <p class="excert">
                                    <?php echo $content ?>
                                </p>
                            </div>
                        </div>

                        <div class="navigation-top">
                            <div class="d-sm-flex justify-content-between text-center">

                                
                                <div align="center">
                                                <div align="center" class="share" style="padding:10px; max-width: 300px; text-align: center;">
                                                    <h5><b style="color: darkblue;">Partager cet Article sur les reseaux</b></h5>
                                                    <ul style="display:flex; justify-content:space-around; margin-top:30px;">
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $absolute_url ?>" target="_blank">
                                                            <li><img src="img/icon/icons8_Facebook_48px.png"> </li>
                                                        </a>
                                                       
                                                        <a href="whatsapp://send?text=<?php echo $absolute_url ?> " data-action="share/whatsapp/share" target="_blank">
                                                            <li><img src="img/icon/icons8_WhatsApp_48px.png"> </li>
                                                        </a>
                                                       
                                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large"  data-dnt="true" data-show-count="false">
                                                            <li><img src="img/icon/icons8_Twitter_48px.png"> </li>
                                                            </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                                       
                                                        

                                                      
                                                    </ul>
                                                </div>
                                            </div>
                            </div>
                            <div class="navigation-area">
                                <div class="row">

                                    <?php
$prev="SELECT * FROM articles where posted_on < '$posted'  ";
$result=mysqli_query($conn, $prev);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
if($count<>0){
   $previd=$row['id'];
   $prevcat=$row['category'];
   $prevtitle=$row['title'];
   $prevcontent=$row['content'];
   $prevposted=$row['posted_on'];
   $prevauthor=$row['posted_by'];
   $prevedit=$row['edit_on'];
   $prevfolder="img/articles/";
    $previmg=$folder.''.$row['img'];
    $previmg2=$folder.''.$row['img'];
echo'
<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
      <div class="thumb">
      <a href="single-blog?id='.$previd.'">
      <img style="width:100px; height: 100px;object-fit: cover;" src="'.$previmg.'" alt="">
    </a>
 </div>
 <div class="arrow">
    <a href="single-blog?id='.$previd.'">
       <span class="lnr text-white ti-arrow-left"></span>
    </a>
 </div>
 <div class="detials">
    <p>Précédent</p>
    <a href="single-blog?id='.$previd.'">
       <h4>'.$prevtitle.'</h4>
    </a>
 </div>
</div>

';
}else{
   $previd=0;
   $prevcat="Erreur";
   $prevtitle="Article introuvable";
   $prevcontent="Nous ne parvenons pas à trouver cette artcile; veuillez recharger la page ou revenir en arrière; Merci";
   $prevposted="Erreur";
   $prevauthor="Erreur";
   $prevedit="Erreur";
   $previmg="Erreur";
   $previmg2="img/banner/bradcam.png";
echo'
<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
      <div class="thumb">
       <img style="width:100px; height: 100px;object-fit: cover;" src="'.$previmg2.'" alt="">
                             
    
 </div>
 <div class="arrow">
 </div>
 <div class="detials">
    <p>Précedent</p>
    
       <h4>Il n\' ya plus d\' autre articles avant celui-ci!</h4>
    
 </div>
</div>

';
}

?>


                                        <?php
$prev="SELECT * FROM articles where posted_on >'$posted'";
$result=mysqli_query($conn, $prev);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
if($count<>0){
   $suivid=$row['id'];
   $suivcat=$row['category'];
   $suivtitle=$row['title'];
   $suivcontent=$row['content'];
   $suivposted=$row['posted_on'];
   $suivauthor=$row['posted_by'];
   $suivedit=$row['edit_on'];
   $suivfolder="img/articles/";
   $suivimg=$folder.''.$row['img'];
    $suivimg2=$folder.''.$row['img'];
echo' <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="single-blog?id='.$suivid.'">
                                 <h4>'.$suivtitle.'</h4>
                              </a>
                           </div>
                           <div class="arrow">
                           <a href="single-blog?id='.$suivid.'">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="single-blog?id='.$suivid.'">
                              <img style="width:100px; height: 100px;object-fit: cover;" src="'.$suivimg.'" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               ';}else{
                  $previd=0;
                  $prevcat="Erreur";
                  $prevtitle="Article introuvable";
                  $prevcontent="Nous ne parvenons pas à trouver cette artcile; veuillez recharger la page ou revenir en arrière; Merci";
                  $prevposted="Erreur";
                  $prevauthor="Erreur";
                  $prevedit="Erreur";
                  $previmg="Erreur";
                  $previmg2="img/banner/bradcam.png";
               echo'
               <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                     <div class="thumb">
                     
                     <img style="width:100px; height: 100px;object-fit: cover;" src="'.$previmg2.'" alt="">
                             
                   
                </div>
                <div class="arrow">
                </div>
                <div class="detials">
                   <p>Suivant</p>
                   
                      <h4>Il n\' ya plus d\' autre articles après celui-ci!</h4>
                   
                      </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               ';
               }
               ?>
                                            
                                           

                                </div>

                                <div class="col-lg-4 p-3" style="">
                                    <div class="blog_right_sidebar" >
                                   

                                        <aside class="single_sidebar_widget popular_post_widget">
                                            <h3 class="widget_title">Similaires</h3>
                                            <?php
                           
$all="SELECT * FROM articles WHERE  category='$cat'  ORDER BY posted_on DESC limit 5 ";
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
                                <img style="width:30%; height:100%; " src="'.$allimg.'" alt="post">
                                <div class="media-body">
                                    <a href="single-blog?id='.$allid.'">
                                        <h3>'.$alltitle.'</h3>
                                    </a>
                                    <p>Publier le: '.$allposted.'</p>
                                </div>
                            </div>';
}
                            ?>

                                        </aside>


                                        <aside class="single_sidebar_widget popular_post_widget">
                                            <h3 class="widget_title">categories</h3>
                                            <?php
                           
$all="SELECT * FROM categories ";
$allresult=mysqli_query($conn, $all);
$allcount=mysqli_num_rows($allresult);

while ($row=mysqli_fetch_array($allresult, MYSQLI_ASSOC)) {
    $allid=$row['id'];
    $allcat=$row['category']; 

echo' 
            <l>
           <li>- <a href="cats.php?id='.$allcat.'">'.$allcat.'</a> </li>
            </ul>

         ';
}
                            ?>

                                        </aside>



                                    </div>
                                </div>

                            </div>
                        </div>
        </section>
        <!--================ Blog Area end =================-->

        <!-- footer start -->
        <?php include 'footer.php' ?>
        <!--/ footer end  -->
        <!-- Modal -->
        <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="serch_form">
                        <input type="text" placeholder="search">
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
        <script src="js/gijgo.min.js"></script>

        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>

        <script src="js/main.js"></script>



    </body>

    </html>