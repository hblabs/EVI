<!doctype html>
<html class="no-js" lang="zxx">
<?php require './db/db.php'?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Environnementalu -A Propos</title>
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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" type="text/css" href=" css/lightbox.min.css ">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

    <!-- header-start -->
    <?php include 'header.php'?>
    <!-- header-end -->

    <!--/ bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1" style="height:40vh;background:linear-gradient(rgba(55, 200, 100, 0.5),
                                   rgba(55, 182, 151, 0.2)), url('img/banner/slider -07.jpg'), bottom center;
                background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>A Propos de Nous</h3>
                    </div>
                    <p></p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ================ contact section start ================= -->
    <section>
    </section>


    <div class="transportaion_area" style="">
        <div class="container">
            <div align="center" data-aos="fade-down" data-aos-duration="3000">
                <h3 style="font-weight: 650;">CE QUE NOUS FAISONS</h3>
            </div>
            <div class="row" style="display: flex;padding: 25px; justify-content: space-between; ">

                <div class="col-xl-4 col-lg-4 col-md-6" style="" data-aos="fade-right" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <div class="single_transport" style="padding:0px ;">
                        <div class="icon" align="center">
                            <img src="img/svg_icon/world.png" alt="">
                        </div>
                        <h3 style="text-align: center;">Lutte contre Changements Climatiques</h3>
                        <p style="text-align: justify;">Lutter contre les changements climatiques et leurs effets
                            néfastes, en référence notamment à la Convention-cadre des Nations unies sur les changements
                            climatiques .</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="3000">
                    <div class="single_transport" style="padding:0px ;">
                        <div class="icon" align="center">
                            <img src="img/svg_icon/world.png" alt="">
                        </div>
                        <h3 style="text-align: center;">Sauvegarde de La biodiversité et]ressources naturelles</h3>
                        <p style="text-align: justify;">la préservation et la gestion durable de la biodiversité et des
                            ressources naturelles, en référence notamment à la Convention sur la diversité biologique.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="3000">
                    <div class="single_transport" style="padding:0px ;">
                        <div class="icon" align="center">
                            <img src="img/svg_icon/world.png" alt="">
                        </div>
                        <h3 style="text-align: center;">Lutte contre Désertification et la Dégradation des terres</h3>
                        <p style="text-align: justify;">La lutte contre la désertification et la dégradation des terres,
                            y compris la déforestation, notamment dans le cadre de la Convention des Nations unies sur
                            la lutte contre la désertification
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_action_area" style="background:linear-gradient(rgba(55, 200, 100, 0.5),
                                   rgba(55, 182, 151, 0.2)), url('img/banner/slider -07.jpg'), bottom center;
                background-size: cover; ">
        <div class="container">
            <div class="row align-items-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <div class="col-xl-7 col-md-6">
                    <div class="action_heading">
                        <h3>Faire un don</h3>
                        <p>Soutenir notre action en faisant un don</p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="call_add_action">
                        <a href="./don.php" class="boxed-btn3">Faire un don</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $counters="SELECT * FROM `counter`";
    $result_count=mysqli_query($conn, $counters);
    $count=mysqli_num_rows($result_count);
          
    ?>

    <div class="counter_area">
        <div class="container">
            <div class="offcan_bg">
                <div class="action_heading" align="center" data-aos="fade-top" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <h3>Quelques Chiffres </h3>
                    <!-- <p>Consulez nos appels d'offre et offres d'emploi</p> -->
                    <p></p>
                </div>
                <div class="row" align="center" data-aos="zoom-out-right" data-aos-duration="1500">

                    <?php
    
                        while ($row=mysqli_fetch_array($result_count, MYSQLI_ASSOC)) {
                            $value=$row['value'];
                            $name=$row['name'];
                            # code...
                       ?>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center" style="text-align: center;">
                            <h3> <span class="counter"><?php echo $value ; ?> </span></h3>
                            <p><?php echo $name ?></p>
                        </div>
                    </div>
                    <?php
                        };
                        ?>
                </div>
            </div>

        </div>
    </div>
    <div class="contact_location" style="background:rgba(100, 255, 100, 0.9) ;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="location_left" style="line-height:2.0 ; padding: 1px;" data-aos="fade-left"
                        data-aos-easing="linear" data-aos-duration="1500">
                        <div class="logo" style="font-weight: bold;">
                            <h3> Partenaires </h3>
                        </div>
                        <div>
                            <?php

                                $imgsearch="SELECT * FROM `partenaires`";
                                $result=mysqli_query($conn, $imgsearch);
                                $imagecount=mysqli_num_rows($result);
                                while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $id=$row['id'];
                                    $nom=$row['nom'];
                                    $desc=$row['description'];
                                    $imgfolder="img/partenaires/";
                                    $partimg=$imgfolder.''.$row['logo'];
                                    echo'<a href="partners?id='.$row["id"].'"><img src="'.$partimg.'" alt="'.$nom.'"  style="width: 10%; padding: 10px;"></a>';
                                }

                                ?>



                        </div>
                        <!-- <ul>
                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                        </ul> -->
                    </div>
                </div>
                <!-- <div class="col-xl-6 col-md-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
              
                </div> -->
            </div>
        </div>
    </div>


    <script>
    AOS.init();
    </script>
    <script src="js/main.js"></script>
    <?php include 'footer.php'?>