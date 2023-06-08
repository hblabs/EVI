<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Environnementalu -Contacts</title>
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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php include 'header.php'?>
    <!-- header-end -->
    <!-- bradcam_area  -->
    <div class="brand p-4" style="height:280px; background:linear-gradient(rgba(55, 200, 100, 0.5),
                                   rgba(55, 182, 151, 0.2)), url('img/banner/slider -07.jpg'), bottom center;
                background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12" style="">
                    <div class="bradcam_text text-center">
                        <h3 style="color:white; margin-top:30px; font-size:80px">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->

    <div class="Estimate_area " style="background:rgb(9, 5, 19)">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5" style="color:yellow" data-aos="fade-top"
                    data-aos-easing="linear" data-aos-duration="1500">
                    <div class="Estimate_info">
                        <h3 style="color:yellow">Ecrivez-nous!</h3>
                        <p style="color:yellow">Besoin de plus d'information nous concernant? Ecrivez-nous et nous vous
                            répondrons dans un bref delai, et en cas d'urgence, passez un appel telephonique.</p>
                        <a href="tel:+243998695790" class="boxed-btn3" target="_blank" style="font-weight: 800;"> + 243
                            998 695 790</a>

                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="form" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="3000">
                        <form action="contact_process.php" method="POST">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" name="nom" placeholder="Votre Nom">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="email" name="sender_mail" placeholder="Votre adresse mail"
                                            style="color: white;">
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <textarea name="mail" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <button class="boxed-btn3-line" name="submit" type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ contact section end ================= -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9015348097064!2d29.403166814686088!3d-1.2282966359119396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19ddcd47b048f9d9%3A0xc4a5a2c4f4d9637b!2sEnvironnementalu%20Asbl!5e0!3m2!1sfr!2scd!4v1676971965522!5m2!1sfr!2scd"
        style="border:0;width:100%; height:400px" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- <div class="contact_location" style="background: white;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="location_left" style="line-height:2.0 ; padding: 1px;" data-aos="fade-left"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                        <div class="logo" style="font-weight: bold;">
                            <h3> Partenaires </h3>
                        </div>
                        <div >
                            <?php

                                require 'db/db.php';
                                $imgsearch="SELECT * FROM `partenaires`";
                                $result=mysqli_query($conn, $imgsearch);
                                $imagecount=mysqli_num_rows($result);
                                while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $id=$row['id'];
                                    $nom=$row['nom'];
                                    $desc=$row['description'];
                                    $imgfolder="img/partenaires/";
                                    $partimg=$imgfolder.''.$row['logo'];
                                    echo'<a href="partners?id='.$row["id"].'"><img src="'.$partimg.'" alt="'.$nom.'"  style="width: 15%; padding: 10px;"></a>';
                                }

                                ?>



                        </div>
                       
                    </div>
                </div>
                <div class="col-xl-3 col-md-3" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1500">
                    <div class="single_location">
                        <h3> <img src="img/icon/address.svg" alt="">Goma</h3>
                        <p>Ville de Goma, Commune de Goma, Quartier KYESHERO - Avenue KARIBU N°08, près du rond point
                            ULPGL</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3" data-aos="fade-right"
                data-aos-easing="linear"
                data-aos-duration="1500">
                    <div class="single_location">
                        <h3> <img src="img/icon/address.svg" alt=""> RUTSHURU</h3>
                        <p>Chefferie de BWISHA, Groupement de KISIGARI, Village de Rubare, Quartier Munzambaye, sur
                            avenue du Couvent, à 300m de la route nationale de Melki Serushago.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->




    <!-- footer start -->
    <?php  include 'footer.php'?>
    <!--/ footer end  -->
    <!-- Modal -->
    <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
    <script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    </script>

    <script>
    AOS.init();
    </script>


</body>

</html>